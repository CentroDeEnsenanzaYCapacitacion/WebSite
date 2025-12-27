@extends('layout.mainLayout')
@section('title', 'Secundaria - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Secundaria</h1>
            <div class="bg-primary mx-auto mb-3" style="width: 80px; height: 4px;"></div>
            <p class="lead text-muted">Educación de calidad para el futuro de tus hijos</p>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Perfil de Ingreso</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Interés en las tecnologías de la información y la computación</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Habilidades básicas en matemáticas y lógica</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Capacidad de análisis y resolución de problemas</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Disposición para el trabajo en equipo</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Nivel medio-alto en el manejo de herramientas digitales</li>
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
                                <h5 class="text-primary">Primer Semestre:</h5>
                                <ul>
                                    <li>Fundamentos de Programación</li>
                                    <li>Matemáticas I</li>
                                    <li>Introducción a la Computación</li>
                                    <li>Redacción Técnica</li>
                                    <li>Inglés Técnico I</li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h5 class="text-primary">Segundo Semestre:</h5>
                                <ul>
                                    <li>Programación Orientada a Objetos</li>
                                    <li>Matemáticas II</li>
                                    <li>Arquitectura de Computadoras</li>
                                    <li>Álgebra Lineal</li>
                                    <li>Inglés Técnico II</li>
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
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Capacidad para diseñar, desarrollar y mantener sistemas de software de alta calidad</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Conocimiento profundo de diversas tecnologías y lenguajes de programación</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Habilidad para gestionar proyectos de TI, trabajando eficazmente en equipos multidisciplinarios</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Competencia para adaptarse a nuevas tecnologías y metodologías de desarrollo</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Ética profesional y compromiso con el desarrollo sostenible</li>
                        </ul>
                        <p class="mt-3 mb-0"><strong>Duración:</strong> 8 semestres (4 años)</p>
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
                                    <li>Desarrollador de Software</li>
                                    <li>Administrador de Sistemas</li>
                                    <li>Consultor en Tecnologías de la Información</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Especialista en Ciberseguridad</li>
                                    <li>Emprendedor en el ámbito tecnológico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg rounded-pill px-5">
                    Inscríbete ahora <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
