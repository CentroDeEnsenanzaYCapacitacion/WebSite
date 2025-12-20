@extends('student.layout.app')
@section('title', 'Dashboard')
@section('content')
<section id="content">
    <div class="container_12"><br>
        <h2>Bienvenido a tu Área Personal</h2>
        <p>Hola <strong>{{ Auth::user()->name }}</strong>, este es tu panel de control.</p>
        <br>

        <div class="grid_12">
            <div style="background: #f5f5f5; padding: 30px; border-radius: 5px; text-align: center;">
                <h3>Área en Desarrollo</h3>
                <p>Tu área personal de estudiante estará disponible próximamente.</p>
                <p>Aquí podrás consultar:</p>
                <ul style="list-style: none; padding: 0;">
                    <li>📚 Tus cursos inscritos</li>
                    <li>📊 Calificaciones</li>
                    <li>📅 Horarios</li>
                    <li>📄 Documentos</li>
                    <li>💳 Pagos</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
