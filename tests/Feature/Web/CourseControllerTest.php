<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_course_page_is_displayed(): void
    {
        $response = $this->get(route('course'));

        $response->assertStatus(200);
        $response->assertViewIs('course');
    }
}
