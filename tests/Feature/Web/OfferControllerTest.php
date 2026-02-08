<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OfferControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_secondary_page_is_displayed(): void
    {
        $response = $this->get(route('secondary'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.secondary');
    }

    public function test_bachillerato_examen_page_is_displayed(): void
    {
        $response = $this->get(route('bachillerato.examen'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.bachillerato-examen');
    }

    public function test_bachillerato_page_is_displayed(): void
    {
        $response = $this->get(route('bachillerato'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.bachillerato');
    }

    public function test_licenciatura_derecho_page_is_displayed(): void
    {
        $response = $this->get(route('licenciatura.derecho'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.licenciatura-derecho');
    }

    public function test_licenciatura_contabilidad_page_is_displayed(): void
    {
        $response = $this->get(route('licenciatura.contabilidad'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.licenciatura-contabilidad');
    }

    public function test_licenciatura_psicologia_page_is_displayed(): void
    {
        $response = $this->get(route('licenciatura.psicologia'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.licenciatura-psicologia');
    }

    public function test_licenciatura_pedagogia_page_is_displayed(): void
    {
        $response = $this->get(route('licenciatura.pedagogia'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.licenciatura-pedagogia');
    }

    public function test_licenciatura_administracion_page_is_displayed(): void
    {
        $response = $this->get(route('licenciatura.administracion'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.licenciatura-administracion');
    }

    public function test_tecnico_ingles_page_is_displayed(): void
    {
        $response = $this->get(route('tecnico.ingles'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.tecnico-ingles');
    }

    public function test_tecnico_informatica_page_is_displayed(): void
    {
        $response = $this->get(route('tecnico.informatica'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.tecnico-informatica');
    }

    public function test_cursos_kids_page_is_displayed(): void
    {
        $response = $this->get(route('cursos.kids'));

        $response->assertStatus(200);
        $response->assertViewIs('offer.cursos-kids');
    }
}
