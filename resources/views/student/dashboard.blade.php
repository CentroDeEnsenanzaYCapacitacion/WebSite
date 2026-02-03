@extends('student.layout.app')

@section('title', 'Dashboard - Plataforma del Alumno')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student-dashboard.css') }}">
@endpush

@section('content')
<div class="content-card">
    <h2 class="dashboard-header">
        ¡Bienvenido, {{ $student->name }} {{ $student->surnames }}!
    </h2>
    <div class="dashboard-info">
        <p class="info-text">
            <strong class="info-label">Curso:</strong> {{ $student->course->name ?? 'No asignado' }}
        </p>
        <p class="info-text">
            <strong class="info-label">Plantel:</strong> {{ $student->crew->name ?? 'No asignado' }}
        </p>
    </div>

    {{-- SECCIÓN OCULTA: Resumen Académico - Descomentar cuando esté lista --}}
    {{--
    <div class="section-container">
        <h3 class="section-title">
            <span class="section-accent"></span>
            Resumen Académico
        </h3>
        <div class="cards-grid">

            <div class="stat-card stat-card-green">
                <div class="stat-card-header">
                    <div class="stat-card-title">Promedio General</div>
                    <div class="stat-card-badge">PERIODO</div>
                </div>
                <div class="stat-card-value">-</div>
                <div class="stat-card-subtitle">Próximamente disponible</div>
            </div>

            <div class="stat-card stat-card-red">
                <div class="stat-card-header">
                    <div class="stat-card-title">Avisos</div>
                    <div class="stat-card-badge">NUEVOS</div>
                </div>
                <div class="stat-card-value">0</div>
                <div class="stat-card-subtitle">Sin avisos pendientes</div>
            </div>
        </div>
    </div>
    --}}

    {{-- SECCIÓN OCULTA: Recursos y Materiales - Descomentar cuando esté lista --}}
    {{--
    <div class="section-container">
        <h3 class="section-title">
            <span class="section-accent"></span>
            Recursos y Materiales
        </h3>
        <div class="cards-grid">

            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-purple">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="resource-title">Material Didáctico</div>
                </div>
                <div class="resource-value resource-value-purple">0</div>
                <div class="resource-subtitle">Documentos disponibles</div>
            </div>


            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
                    <div class="resource-title">Biblioteca Digital</div>
                </div>
                <div class="resource-value resource-value-blue">0</div>
                <div class="resource-subtitle">Recursos disponibles</div>
            </div>
        </div>
    </div>
    --}}

    <div class="section-container">
        <h3 class="section-title">
            <span class="section-accent"></span>
            Estado de Pagos
        </h3>
        <div class="cards-grid">

            <a href="{{ route('student.payments') }}" class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-{{ $paymentStatus['status'] == 'current' ? 'green' : ($paymentStatus['status'] == 'critical' ? 'red' : 'yellow') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="resource-title">Estado de Pagos</div>
                </div>
                <div class="resource-value resource-value-{{ $paymentStatus['status'] == 'current' ? 'green' : ($paymentStatus['status'] == 'critical' ? 'red' : 'yellow') }}">{{ $paymentStatus['message'] }}</div>
                <div class="resource-subtitle">Consulta tu historial</div>
            </a>

            {{-- CARDS OCULTAS: Otras opciones de Administración - Descomentar cuando estén listas --}}
            {{--
            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-yellow">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div class="resource-title">Documentación</div>
                </div>
                <div class="resource-value resource-value-yellow">-</div>
                <div class="resource-subtitle">Documentos pendientes</div>
            </div>


            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-indigo">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="resource-title">Mi Horario</div>
                </div>
                <div class="resource-value resource-value-indigo">Ver</div>
                <div class="resource-subtitle">Próximamente disponible</div>
            </div>


            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-teal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="resource-title">Asesorías</div>
                </div>
                <div class="resource-value resource-value-teal">0</div>
                <div class="resource-subtitle">Próximamente disponible</div>
            </div>


            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="resource-title">Calendario Escolar</div>
                </div>
                <div class="resource-value resource-value-orange">0</div>
                <div class="resource-subtitle">Eventos próximos</div>
            </div>


            <div class="resource-card">
                <div class="resource-card-header">
                    <div class="resource-icon resource-icon-cyan">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                    </div>
                    <div class="resource-title">Credencial</div>
                </div>
                <div class="resource-value resource-value-cyan">Ver</div>
                <div class="resource-subtitle">Próximamente disponible</div>
            </div>
            --}}
        </div>
    </div>

    @if($showExamGuide)

    <div class="exam-guide">
        <div class="exam-guide-header">
            <div class="exam-guide-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <h3 class="exam-guide-title">
                Guía de Examen Único
            </h3>
        </div>
        <p class="exam-guide-description">
            Como estudiante de <strong>{{ $student->course->name }}</strong>, tienes acceso a materiales especializados y guías de estudio para prepararte para el examen único de bachillerato.
        </p>
        <div class="exam-guide-resources">
            <h4 class="resources-title">
                Recursos Disponibles:
            </h4>
            <ul class="resources-list">
                <li>
                    <span class="resource-emoji">📚</span>
                    Material de estudio por asignatura
                </li>
                <li>
                    <span class="resource-emoji">📝</span>
                    Exámenes de práctica
                </li>
                <li>
                    <span class="resource-emoji">🎯</span>
                    Guías temáticas especializadas
                </li>
                <li>
                    <span class="resource-emoji">👨‍🏫</span>
                    Tutorías y asesorías
                </li>
            </ul>
        </div>
        <div class="exam-guide-notice">
            <p>
                <strong>💡 Próximamente:</strong> Podrás descargar las guías de estudio y acceder a materiales interactivos desde esta sección.
            </p>
        </div>
    </div>
    @endif

    <div class="construction-notice">
        <h3 class="construction-title">
            Plataforma en Construcción
        </h3>
        <p class="construction-description">
            Estamos trabajando para traerte la mejor experiencia de aprendizaje. Pronto podrás acceder a tus cursos,
            materiales de estudio, calificaciones y mucho más desde esta plataforma.
        </p>
    </div>
</div>
@endsection
