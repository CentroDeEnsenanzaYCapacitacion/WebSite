@extends('student.layout.app')

@section('title', 'Dashboard - Plataforma del Alumno')

@section('content')
<div class="content-card">
    <h2 style="font-size: 28px; font-weight: 600; color: #1a202c; margin-bottom: 8px;">
        ¡Bienvenido, {{ Auth::user()->name }}!
    </h2>
    <p style="color: #718096; margin-bottom: 32px;">
        Este es tu área personal de estudiante
    </p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-top: 32px;">
        <!-- Card: Mis Cursos -->
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 24px; border-radius: 12px; color: white;">
            <div style="font-size: 14px; font-weight: 500; opacity: 0.9; margin-bottom: 8px;">Mis Cursos</div>
            <div style="font-size: 32px; font-weight: 700; margin-bottom: 8px;">0</div>
            <div style="font-size: 13px; opacity: 0.8;">Próximamente disponible</div>
        </div>

        <!-- Card: Calificaciones -->
        <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 24px; border-radius: 12px; color: white;">
            <div style="font-size: 14px; font-weight: 500; opacity: 0.9; margin-bottom: 8px;">Calificaciones</div>
            <div style="font-size: 32px; font-weight: 700; margin-bottom: 8px;">-</div>
            <div style="font-size: 13px; opacity: 0.8;">Próximamente disponible</div>
        </div>

        <!-- Card: Materiales -->
        <div style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); padding: 24px; border-radius: 12px; color: white;">
            <div style="font-size: 14px; font-weight: 500; opacity: 0.9; margin-bottom: 8px;">Material Didáctico</div>
            <div style="font-size: 32px; font-weight: 700; margin-bottom: 8px;">0</div>
            <div style="font-size: 13px; opacity: 0.8;">Próximamente disponible</div>
        </div>
    </div>

    <div style="margin-top: 48px; padding: 24px; background: #edf2f7; border-radius: 12px; border-left: 4px solid #667eea;">
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
