@extends('student.layout.app')

@section('title', 'Dashboard - Plataforma del Alumno')

@section('content')
<div class="content-card">
    <h2 style="font-size: 28px; font-weight: 600; color: #1a202c; margin-bottom: 8px;">
        ¡Bienvenido, {{ $student->name }} {{ $student->surnames }}!
    </h2>
    <div style="margin-bottom: 32px;">
        <p style="color: #4a5568; font-size: 16px; margin-bottom: 4px;">
            <strong style="color: #f97316;">Curso:</strong> {{ $student->course->name ?? 'No asignado' }}
        </p>
        <p style="color: #4a5568; font-size: 16px;">
            <strong style="color: #f97316;">Plantel:</strong> {{ $student->crew->name ?? 'No asignado' }}
        </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-top: 32px;">
        <!-- Card: Mis Cursos -->
        <div style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%); padding: 24px; border-radius: 12px; color: white;">
            <div style="font-size: 14px; font-weight: 500; opacity: 0.9; margin-bottom: 8px;">Mis Cursos</div>
            <div style="font-size: 32px; font-weight: 700; margin-bottom: 8px;">0</div>
            <div style="font-size: 13px; opacity: 0.8;">Próximamente disponible</div>
        </div>

        <!-- Card: Calificaciones -->
        <div style="background: linear-gradient(135deg, #fb923c 0%, #f97316 100%); padding: 24px; border-radius: 12px; color: white;">
            <div style="font-size: 14px; font-weight: 500; opacity: 0.9; margin-bottom: 8px;">Calificaciones</div>
            <div style="font-size: 32px; font-weight: 700; margin-bottom: 8px;">-</div>
            <div style="font-size: 13px; opacity: 0.8;">Próximamente disponible</div>
        </div>

        <!-- Card: Materiales -->
        <div style="background: linear-gradient(135deg, #fdba74 0%, #fb923c 100%); padding: 24px; border-radius: 12px; color: white;">
            <div style="font-size: 14px; font-weight: 500; opacity: 0.9; margin-bottom: 8px;">Material Didáctico</div>
            <div style="font-size: 32px; font-weight: 700; margin-bottom: 8px;">0</div>
            <div style="font-size: 13px; opacity: 0.8;">Próximamente disponible</div>
        </div>
    </div>

    <div style="margin-top: 48px; padding: 24px; background: #fff7ed; border-radius: 12px; border-left: 4px solid #f97316;">
        <h3 style="font-size: 18px; font-weight: 600; color: #2d3748; margin-bottom: 12px;">
            Plataforma en Construcción
        </h3>
        <p style="color: #4a5568; line-height: 1.6;">
            Estamos trabajando para traerte la mejor experiencia de aprendizaje. Pronto podrás acceder a tus cursos,
            materiales de estudio, calificaciones y mucho más desde esta plataforma.
        </p>
    </div>
</div>
@endsection
