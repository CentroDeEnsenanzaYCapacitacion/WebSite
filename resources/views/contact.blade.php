@extends('layout.mainLayout')
@section('title', 'Contacto - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Contáctanos</h1>
            <div class="bg-primary mx-auto mb-3 title-underline"></div>
            <p class="lead text-muted">¿Tienes dudas? Estamos aquí para ayudarte</p>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Envíanos un mensaje</h3>

                        <form action="{{ route('contact.post') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Nombre completo <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Tu nombre completo" required>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="cel" class="form-label fw-semibold">Teléfono <span class="text-danger">*</span></label>
                                    <input type="tel" name="cel" class="form-control form-control-lg" id="cel" placeholder="10 dígitos" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="mail" class="form-label fw-semibold">Correo electrónico <span class="text-danger">*</span></label>
                                    <input type="email" name="mail" class="form-control form-control-lg" id="mail" placeholder="tu@email.com" required>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label for="plantel" class="form-label fw-semibold">Plantel de interés <span class="text-danger">*</span></label>
                                    <select name="crew" class="form-select form-select-lg" id="plantel" required>
                                        <option value="">Selecciona un plantel</option>
                                        @foreach ($crews as $crew)
                                            <option value="{{ $crew->name }}">{{ $crew->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="curso" class="form-label fw-semibold">Curso de interés <span class="text-danger">*</span></label>
                                    <select name="course" class="form-select form-select-lg" id="curso" required>
                                        <option value="">Selecciona un curso</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course['name'] }}">{{ $course['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="msg" class="form-label fw-semibold">Mensaje</label>
                                <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Cuéntanos más sobre tu interés..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill">
                                Enviar mensaje <i class="bi bi-send ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4 contact-info-card">
                    <div class="card-body p-4 text-white">
                        <h4 class="mb-4">Información de contacto</h4>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-telephone-fill fs-4 me-3"></i>
                            <div>
                                <strong>Teléfono</strong>
                                <p class="mb-0">55 5972 3763 (Ixtapaluca)</p>
                                <p class="mb-0">595 955 5607 (Texcoco)</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="bi bi-clock-fill fs-4 me-3"></i>
                            <div>
                                <strong>Horario</strong>
                                <p class="mb-0">Lun-Vie: 8:00 - 20:00</p>
                                <p class="mb-0">Sábados: 8:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info mt-4">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>Respuesta rápida</strong>
                    <p class="mb-0 small">Nos comprometemos a responder en menos de 24 horas hábiles.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
