<?php

namespace Tests\Feature\Web;

use App\Models\WebCarousel;
use App\Models\WebMvv;
use App\Models\WebOpinion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        config(['services.intranet.carousel_url' => '']);

        WebCarousel::factory()->create();
        WebMvv::factory()->count(4)->create();
        WebOpinion::factory()->count(3)->create();
    }

    public function test_home_page_is_displayed(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewIs('home');
    }

    public function test_home_page_has_carousel_data(): void
    {
        WebCarousel::factory()->count(2)->create();

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('carousel_texts');
        $this->assertCount(3, $response->viewData('carousel_texts'));
    }

    public function test_home_page_has_mvv_data(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('mvv_data');
        $this->assertGreaterThanOrEqual(4, $response->viewData('mvv_data')->count());
    }

    public function test_home_page_has_opinions_data(): void
    {
        WebOpinion::factory()->count(2)->create();

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('opinions');
        $this->assertCount(5, $response->viewData('opinions'));
    }

    public function test_home_page_has_empty_carousel_url_by_default(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $this->assertEquals('', $response->viewData('carousel_url'));
    }

    public function test_home_page_passes_view_data(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('carousel_url');
        $response->assertViewHas('opinions_url');
        $response->assertViewHas('carousel_texts');
        $response->assertViewHas('mvv_data');
        $response->assertViewHas('opinions');
        $response->assertViewHas('opinionImages');
    }
}
