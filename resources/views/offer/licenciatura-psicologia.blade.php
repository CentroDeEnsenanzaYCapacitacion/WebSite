@extends('layout.mainLayout')
@section('title', 'Licenciatura en Psicología - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Licenciatura en Psicología</h1>
            <div class="bg-primary mx-auto mb-3 title-underline"></div>
            <p class="lead text-muted">Formación profesional de excelencia</p>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Perfil de Ingreso</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Contenido pendiente</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Plan de Estudios</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <ul>
                                    <li>Contenido pendiente</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Perfil de Egreso</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Contenido pendiente</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Oportunidades Laborales</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Contenido pendiente</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <a href="{{ asset('assets/pdf/licenciatura-psicologia.pdf') }}" class="btn btn-outline-primary btn-lg rounded-pill px-5 me-3" target="_blank">
                    <i class="bi bi-download me-2"></i> Descargar PDF
                </a>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg rounded-pill px-5">
                    Inscríbete ahora <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
