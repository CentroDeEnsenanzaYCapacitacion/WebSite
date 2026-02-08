<?php

namespace Tests\Feature\Web;

use App\Models\WebCarousel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CrewsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_crews_page_is_displayed(): void
    {
        $response = $this->get(route('crews'));

        $response->assertStatus(200);
        $response->assertViewIs('crews');
    }

    public function test_crews_page_has_carousel_data(): void
    {
        WebCarousel::factory()->count(3)->create();

        $response = $this->get(route('crews'));

        $response->assertStatus(200);
        $response->assertViewHas('carousel_texts');
        $this->assertCount(3, $response->viewData('carousel_texts'));
    }

    public function test_crews_page_sanitizes_carousel_url(): void
    {
        config(['services.intranet.carousel_url' => 'https://capacitacioncec.edu.mx/carousel']);
        config(['app.allowed_external_hosts' => 'capacitacioncec.edu.mx']);

        $response = $this->get(route('crews'));

        $response->assertStatus(200);
        $response->assertViewHas('carousel_url');
    }

    public function test_crews_page_handles_empty_carousel_url(): void
    {
        config(['services.intranet.carousel_url' => '']);

        $response = $this->get(route('crews'));

        $response->assertStatus(200);
        $this->assertEquals('', $response->viewData('carousel_url'));
    }

    public function test_crews_page_handles_invalid_carousel_url(): void
    {
        config(['services.intranet.carousel_url' => 'https://malicious.com/attack']);
        config(['app.allowed_external_hosts' => 'capacitacioncec.edu.mx']);

        $response = $this->get(route('crews'));

        $response->assertStatus(200);
        $this->assertEquals('', $response->viewData('carousel_url'));
    }
}
