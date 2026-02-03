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
