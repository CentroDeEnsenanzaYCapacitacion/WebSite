<?php

namespace Tests\Feature\Student;

use App\Models\Student;
use App\Http\Middleware\ValidateSessionIntegrity;
use App\Services\SecurityLogService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class SessionIntegrityTest extends TestCase
{
    use RefreshDatabase;

    public function test_session_is_invalidated_when_ip_changes(): void
    {
        $student = Student::factory()->create();
        $this->actingAs($student, 'student');

        $request = Request::create(route('student.dashboard'), 'GET');
        $request->setLaravelSession(app('session.store'));
        $request->session()->put('login_ip', '192.168.1.1');
        $request->session()->put('login_user_agent', 'TestAgent');
        $request->server->set('REMOTE_ADDR', '10.0.0.1');

        $middleware = app(ValidateSessionIntegrity::class);
        $response = $middleware->handle($request, function () {
            return response('OK');
        });

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertGuest('student');
    }

    public function test_session_continues_when_ip_matches(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.dashboard'));

        $response->assertStatus(200);
    }

    public function test_user_agent_change_does_not_invalidate_session(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'OldAgent'])
            ->get(route('student.dashboard'));

        $response->assertStatus(200);
    }
}
