@extends('layout.mainLayout')
@push('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/contact.css') }}">
@endpush
@section('title', 'Área del Alumno - Iniciar Sesión')
@section('content')
<section id="content">
    <div class="container_12"><br>
        <h2>Área del Alumno</h2>
        <p>Inicia sesión para acceder a tu área personal</p>
        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('student.login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email" class="control-label">Correo electrónico</label>
                <div>
                    <input name="email" type="email" class="form-control" id="email"
                           placeholder="correo@ejemplo.com" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Contraseña</label>
                <div>
                    <input name="password" type="password" class="form-control" id="password"
                           placeholder="Contraseña" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label style="font-weight: normal;">
                        <input type="checkbox" name="remember"> Recordarme
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary" style="padding: 10px 30px; font-size: 16px;">
                        Iniciar Sesión
                    </button>
                </div>
            </div>

            {{-- Funcionalidad futura
            <div class="form-group">
                <div>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
            --}}
        </form>
    </div>
</section>
@endsection
