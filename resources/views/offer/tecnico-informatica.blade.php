@extends('layout.mainLayout')
@section('title', 'Carrera Técnica en Informática - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Carrera Técnica en Informática</h1>
            <div class="bg-primary mx-auto mb-3 title-underline"></div>
            <p class="lead text-muted">Formación técnica especializada</p>
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
                                <h6 class="fw-bold text-primary">Introducción</h6>
                                <ul>
                                    <li>Windows</li>
                                    <li>Internet básico</li>
                                </ul>
                                <h6 class="fw-bold text-primary mt-3">Paquetería Office</h6>
                                <ul>
                                    <li>Word</li>
                                    <li>Excel</li>
                                    <li>Power Point</li>
                                    <li>Access</li>
                                </ul>
                                <h6 class="fw-bold text-primary mt-3">Informática contable</h6>
                                <ul>
                                    <li>ASPEL COI</li>
                                    <li>ASPEL NOI</li>
                                    <li>ASPEL SAE</li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold text-primary">Programación</h6>
                                <ul>
                                    <li>Visual Basic</li>
                                    <li>Dreamweaver</li>
                                </ul>
                                <h6 class="fw-bold text-primary mt-3">Diseño gráfico</h6>
                                <ul>
                                    <li>CorelDraw</li>
                                    <li>Photoshop</li>
                                    <li>Animate</li>
                                </ul>
                                <h6 class="fw-bold text-primary mt-3">Ensamble y mantenimiento</h6>
                                <ul>
                                    <li>Ensamble</li>
                                    <li>Redes</li>
                                    <li>Internet avanzado</li>
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
                <a href="{{ asset('assets/pdf/tecnico-informatica.pdf') }}" class="btn btn-outline-primary btn-lg rounded-pill px-5 me-3" target="_blank">
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
