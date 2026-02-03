<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function secondary()
    {
        return view('offer.secondary');
    }

    public function bachilleratoExamen()
    {
        return view('offer.bachillerato-examen');
    }

    public function bachillerato()
    {
        return view('offer.bachillerato');
    }

    public function licenciaturaDerecho()
    {
        return view('offer.licenciatura-derecho');
    }

    public function licenciaturaContabilidad()
    {
        return view('offer.licenciatura-contabilidad');
    }

    public function licenciaturaPsicologia()
    {
        return view('offer.licenciatura-psicologia');
    }

    public function licenciaturaPedagogia()
    {
        return view('offer.licenciatura-pedagogia');
    }

    public function licenciaturaAdministracion()
    {
        return view('offer.licenciatura-administracion');
    }

    public function tecnicoIngles()
    {
        return view('offer.tecnico-ingles');
    }

    public function tecnicoInformatica()
    {
        return view('offer.tecnico-informatica');
    }

    public function cursosKids()
    {
        return view('offer.cursos-kids');
    }
}
