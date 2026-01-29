@extends('layout.mainLayout')
@section('title', 'Bachillerato 7, 8, 9, 10 y 12 meses - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Bachillerato</h1>
            <div class="bg-primary mx-auto mb-3 title-underline"></div>
            <p class="lead text-muted">7, 8, 9, 10 y 12 meses</p>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Plan de Estudios</h3>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <h5 class="text-primary mb-3">1° Trimestre</h5>
                                <ul>
                                    <li>Matemáticas I</li>
                                    <li>Química I</li>
                                    <li>Geografía</li>
                                    <li>Introducción a las Ciencias Sociales</li>
                                    <li>Informática I</li>
                                    <li>Taller de lectura y redacción I</li>
                                    <li>Inglés I</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5 class="text-primary mb-3">2° Trimestre</h5>
                                <ul>
                                    <li>Matemáticas II</li>
                                    <li>Química II</li>
                                    <li>Biología I</li>
                                    <li>Historia de México I</li>
                                    <li>Informática II</li>
                                    <li>Taller de lectura y redacción II</li>
                                    <li>Inglés II</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5 class="text-primary mb-3">3° Trimestre</h5>
                                <ul>
                                    <li>Matemáticas III</li>
                                    <li>Física I</li>
                                    <li>Biología II</li>
                                    <li>Historia de México II</li>
                                    <li>Métodos de la investigación I</li>
                                    <li>Lectura I</li>
                                    <li>Inglés III</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5 class="text-primary mb-3">4° Trimestre</h5>
                                <ul>
                                    <li>Matemáticas IV</li>
                                    <li>Física II</li>
                                    <li>Ecología y medio ambiente</li>
                                    <li>Comunicación aplicada</li>
                                    <li>Métodos de investigación II</li>
                                    <li>Lectura II</li>
                                    <li>Inglés IV</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5 class="text-primary mb-3">5° Trimestre</h5>
                                <ul>
                                    <li>Individuo y sociedad</li>
                                    <li>Psicología del desarrollo</li>
                                    <li>Derecho I</li>
                                    <li>Introducción al trabajo social</li>
                                    <li>Matemáticas V</li>
                                    <li>Fundamentos de la Mercadotecnia</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5 class="text-primary mb-3">6° Trimestre</h5>
                                <ul>
                                    <li>Filosofía</li>
                                    <li>Derecho laboral mercantil</li>
                                    <li>Introducción a la Psicología aplicada</li>
                                    <li>Administración</li>
                                    <li>Matemáticas VI</li>
                                    <li>Mercadotecnia aplicada</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-primary">Modalidades</h3>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-building fs-1 text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Presencial</h5>
                                        <p class="mb-0 text-muted">Asiste a nuestras instalaciones con horarios flexibles</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-laptop fs-1 text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">En línea</h5>
                                        <p class="mb-0 text-muted">Estudia desde la comodidad de tu hogar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-arrows-angle-contract fs-1 text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Mixta</h5>
                                        <p class="mb-0 text-muted">Combina clases presenciales y en línea</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <a href="{{ asset('assets/pdf/bachillerato-9-12.pdf') }}" class="btn btn-outline-primary btn-lg rounded-pill px-5 me-3" target="_blank">
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
