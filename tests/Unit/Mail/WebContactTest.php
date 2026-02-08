<?php

namespace Tests\Unit\Mail;

use App\Mail\WebContact;
use Tests\TestCase;

class WebContactTest extends TestCase
{
    public function test_mailable_has_correct_subject(): void
    {
        $details = [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'test@example.com',
            'crew' => 'Test Crew',
            'course' => 'Test Course',
            'msg' => 'Test message',
        ];

        $mailable = new WebContact($details);

        $mailable->assertHasSubject('Consulta desde la web CEC');
    }

    public function test_mailable_uses_correct_view(): void
    {
        $details = [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'test@example.com',
            'crew' => 'Test Crew',
            'course' => 'Test Course',
            'msg' => 'Test message',
        ];

        $mailable = new WebContact($details);

        $mailable->assertSeeInHtml('Test User');
    }

    public function test_mailable_stores_details(): void
    {
        $details = [
            'name' => 'John Doe',
            'cel' => '5551234567',
            'mail' => 'john@example.com',
            'crew' => 'Main Crew',
            'course' => 'Derecho',
            'msg' => 'I want information',
        ];

        $mailable = new WebContact($details);

        $this->assertEquals('John Doe', $mailable->details['name']);
        $this->assertEquals('5551234567', $mailable->details['cel']);
        $this->assertEquals('john@example.com', $mailable->details['mail']);
        $this->assertEquals('Main Crew', $mailable->details['crew']);
        $this->assertEquals('Derecho', $mailable->details['course']);
        $this->assertEquals('I want information', $mailable->details['msg']);
    }

    public function test_mailable_has_no_attachments(): void
    {
        $details = [
            'name' => 'Test User',
            'cel' => '1234567890',
            'mail' => 'test@example.com',
            'crew' => 'Test Crew',
            'course' => 'Test Course',
            'msg' => 'Test message',
        ];

        $mailable = new WebContact($details);

        $this->assertEmpty($mailable->attachments());
    }
}
