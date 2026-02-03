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
                        <h3 class="mb-4 text-primary">Plan de Estudios</h3>

                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="card bg-light border-0 h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3"><span class="badge bg-primary me-2">Módulo 1</span> Introducción</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Windows</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Internet básico</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card bg-light border-0 h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3"><span class="badge bg-primary me-2">Módulo 2</span> Paquetería Office</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Word</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Excel</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Power Point</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Access</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card bg-light border-0 h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3"><span class="badge bg-primary me-2">Módulo 3</span> Informática contable</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>ASPEL COI</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>ASPEL NOI</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>ASPEL SAE</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card bg-light border-0 h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3"><span class="badge bg-primary me-2">Módulo 4</span> Programación</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Visual Basic</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Dreamweaver</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card bg-light border-0 h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3"><span class="badge bg-primary me-2">Módulo 5</span> Diseño gráfico</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>CorelDraw</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Photoshop</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Animate</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card bg-light border-0 h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3"><span class="badge bg-primary me-2">Módulo 6</span> Ensamble y mantenimiento</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Ensamble</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Redes</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Internet avanzado</li>
                                        </ul>
                                    </div>
                                </div>
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
