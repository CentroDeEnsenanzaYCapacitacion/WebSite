@extends('layout.mainLayout')
@push('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/contact.css') }}">
@endpush
@section('title', 'Planteles')
@section('content')
<section id="content">
    <div class="container_12"><br>
        <h2>Formulario de contacto</h2>
        <p></p>
        <br>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('contact.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Nombre</label>
                <div>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label for="cel" class="control-label">Teléfono</label>
                <div>
                    <input name="cel" type="text" class="form-control" id="cel" placeholder="Teléfono">
                </div>
            </div>
            <div class="form-group">
                <label for="mail" class="control-label">Correo electrónico</label>
                <div>
                    <input name="mail" type="email" class="form-control" id="mail" placeholder="Correo electrónico">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-4">
                    <label for="plantel" class="control-label">Plantel</label>
                    <div>
                        <select name="crew" class="form-control" id="plantel">
                            <option>Ixtapaluca</option>
                            <option>Texcoco</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-4">
                    <label for="curso" class="control-label">Curso</label>
                    <div>
                        <select name="course" class="form-control" id="curso">
                            @foreach ($courses as $course)
                                <option>{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="msg" class="control-label">Mensaje</label>
                <div>
                    <textarea rows="5" name="msg" class="form-control" id="msg" placeholder="mensaje"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn bg-orange">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
