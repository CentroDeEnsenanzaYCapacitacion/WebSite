<?php

namespace Tests\Feature\Web;

use App\Mail\WebContact;
use App\Models\Course;
use App\Models\Crew;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_is_displayed(): void
    {
        Crew::factory()->create(['id' => 1, 'name' => 'Excluded Crew']);
        Crew::factory()->create(['id' => 2, 'name' => 'Main Crew']);
        Course::factory()->create(['is_active' => 1, 'name' => 'Licenciatura en Derecho']);

        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertViewIs('contact');
        $response->assertViewHas('courses');
        $response->assertViewHas('crews');
    }

    public function test_contact_page_excludes_crew_with_id_1(): void
    {
        Crew::factory()->create(['id' => 1, 'name' => 'Excluded Crew']);
        $visibleCrew = Crew::factory()->create(['id' => 2, 'name' => 'Visible Crew']);

        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $crews = $response->viewData('crews');
        $this->assertFalse($crews->contains('id', 1));
        $this->assertTrue($crews->contains('id', $visibleCrew->id));
    }

    public function test_contact_page_filters_excluded_courses(): void
    {
        Crew::factory()->create(['id' => 2]);
        Course::factory()->create(['is_active' => 1, 'name' => 'Secundaria Informatica']);
        Course::factory()->create(['is_active' => 1, 'name' => 'Licenciatura en Derecho']);

        $response = $this->get(route('contact'));

        $courses = $response->viewData('courses');
        $courseNames = $courses->pluck('name')->toArray();
        $this->assertNotContains('Secundaria Informatica', $courseNames);
    }

    public function test_contact_page_only_shows_active_courses(): void
    {
        Crew::factory()->create(['id' => 2]);
        Course::factory()->create(['is_active' => 0, 'name' => 'Inactive Course']);
        Course::factory()->create(['is_active' => 1, 'name' => 'Active Course']);

        $response = $this->get(route('contact'));

        $courses = $response->viewData('courses');
        $courseNames = $courses->pluck('name')->toArray();
        $this->assertNotContains('Inactive Course', $courseNames);
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post(route('contact.post'), []);

        $response->assertSessionHasErrors(['name', 'cel', 'mail', 'crew', 'course', 'msg']);
    }

    public function test_contact_form_validates_email_format(): void
    {
        $response = $this->post(route('contact.post'), [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'not-an-email',
            'crew' => 'Some Crew',
            'course' => 'Some Course',
            'msg' => 'Test message',
        ]);

        $response->assertSessionHasErrors('mail');
    }

    public function test_contact_form_validates_crew_exists(): void
    {
        $response = $this->post(route('contact.post'), [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'test@example.com',
            'crew' => 'Non Existent Crew',
            'course' => 'Some Course',
            'msg' => 'Test message',
        ]);

        $response->assertSessionHasErrors('crew');
    }

    public function test_contact_form_validates_max_lengths(): void
    {
        $crew = Crew::factory()->create();

        $response = $this->post(route('contact.post'), [
            'name' => str_repeat('a', 256),
            'cel' => str_repeat('1', 21),
            'mail' => 'test@example.com',
            'crew' => $crew->name,
            'course' => 'Course',
            'msg' => str_repeat('a', 1001),
        ]);

        $response->assertSessionHasErrors(['name', 'cel', 'msg']);
    }

    public function test_contact_form_sends_email_on_valid_submission(): void
    {
        Mail::fake();

        $crew = Crew::factory()->create();
        config(['mail.contact_to' => 'contact@example.com']);

        $response = $this->post(route('contact.post'), [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'test@example.com',
            'crew' => $crew->name,
            'course' => 'Test Course',
            'msg' => 'This is a test message',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        Mail::assertSent(WebContact::class, function ($mail) {
            return $mail->details['name'] === 'Test User'
                && $mail->details['mail'] === 'test@example.com';
        });
    }

    public function test_contact_form_shows_error_on_mail_failure(): void
    {
        Mail::fake();
        Mail::shouldReceive('to->send')->andThrow(new \Exception('Mail error'));

        $crew = Crew::factory()->create();

        $response = $this->post(route('contact.post'), [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'test@example.com',
            'crew' => $crew->name,
            'course' => 'Test Course',
            'msg' => 'This is a test message',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('error');
    }
}
