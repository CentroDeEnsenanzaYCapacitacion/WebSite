@extends('layout.mainLayout')
@section('title', 'Secundaria Abierta - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Secundaria Abierta + Informática</h1>
            <div class="bg-primary mx-auto mb-3 title-underline"></div>
            <p class="lead text-muted">Modalidad presencial y en línea</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-primary">Plan de Estudios</h3>
                        <p class="fw-bold mb-3">7 básicos y 2 diversificados</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Lenguaje y comunicación 3</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Lenguaje y comunicación 4</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pensamientos matemáticos 3</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pensamientos matemáticos 4</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pensamientos matemáticos 5</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Vida y comunidad 2</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Vida y comunidad 3</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>2 diversificados</li>
                        </ul>
                        <div class="mt-3">
                            <img src="{{ asset('assets/img/inea.jpg') }}" alt="INEA" class="img-fluid" style="max-height: 60px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-primary">Informática</h3>
                        <p class="fw-bold mb-3">Introducción y Windows</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-pc-display text-primary me-2"></i>Internet básico</li>
                            <li class="mb-3"><i class="bi bi-folder2-open text-primary me-2"></i>Paquetería de Office:</li>
                        </ul>
                        <ul class="list-unstyled ms-4">
                            <li class="mb-2"><i class="bi bi-file-earmark-word text-primary me-2"></i>Word</li>
                            <li class="mb-2"><i class="bi bi-file-earmark-excel text-success me-2"></i>Excel</li>
                            <li class="mb-2"><i class="bi bi-file-earmark-ppt text-danger me-2"></i>Power Point</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-primary">Modalidades</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-building fs-1 text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Presencial</h5>
                                        <p class="mb-0 text-muted">Asiste a nuestras instalaciones con horarios flexibles</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-laptop fs-1 text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">En línea</h5>
                                        <p class="mb-0 text-muted">Estudia desde la comodidad de tu hogar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <a href="{{ asset('assets/pdf/secundaria.pdf') }}" class="btn btn-outline-primary btn-lg rounded-pill px-5 me-3" target="_blank">
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
