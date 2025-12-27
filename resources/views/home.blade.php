@extends('layout.mainLayout')
@section('title', 'CEC - Tu futuro comienza aquí')

@push('scripts')
<script src="{{ asset('assets/js/home.js') }}"></script>
@endpush

@section('content')

<section class="hero-section text-white">
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div id="carouselFacilities" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($carousel_texts as $index => $item)
                            <button type="button" data-bs-target="#carouselFacilities" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner rounded">
                        @foreach ($carousel_texts as $index => $item)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ rtrim($carousel_url, '/') }}/{{ $index + 1 }}.jpg" class="d-block w-100 carousel-img" alt="{{ $item->title }}">
                                @if($item->title || $item->description)
                                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                                        @if($item->title)
                                            <h5 class="fw-bold mb-{{ $item->description ? '2' : '0' }}">{{ $item->title }}</h5>
                                        @endif
                                        @if($item->description)
                                            <p class="mb-0">{{ $item->description }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacilities" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFacilities" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center fade-in-up">
                <h1 class="display-3 fw-bold mb-4">Tu futuro comienza aquí</h1>
                <p class="lead mb-4 fs-4">{{ $mvv_data[0]->description }}</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg rounded-pill px-5">
                        Inscríbete ahora <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#oferta" class="btn btn-outline-light btn-lg rounded-pill px-5">
                        Conocer más
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="counter-item">
                    <h2 class="display-4 fw-bold text-primary mb-0" data-count="{{ date('Y') - 2014 }}">0</h2>
                    <p class="text-muted fw-semibold">Años de experiencia</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-item">
                    <h2 class="display-4 fw-bold text-primary mb-0" data-count="{{ (date('Y') - 2014) * 50 }}">0</h2>
                    <p class="text-muted fw-semibold">Alumnos graduados</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-item">
                    <h2 class="display-4 fw-bold text-primary mb-0" data-count="2">0</h2>
                    <p class="text-muted fw-semibold">Planteles</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-item">
                    <h2 class="display-4 fw-bold text-primary mb-0" data-count="20">0</h2>
                    <p class="text-muted fw-semibold">Programas educativos</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="oferta" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-secondary mb-3">Nuestra Identidad</h2>
            <div class="bg-primary mx-auto title-underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-white shadow text-center">
                            <img src="{{ asset('assets/img/mision.png') }}" alt="Misión" class="mission-vision-icon mb-3">
                            <h4 class="fw-bold">{{ $mvv_data[1]->name }}</h4>
                        </div>
                        <div class="card-flip-back shadow">
                            <p class="lead">{{ $mvv_data[1]->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-white shadow text-center">
                            <img src="{{ asset('assets/img/vision.png') }}" alt="Visión" class="mission-vision-icon mb-3">
                            <h4 class="fw-bold">{{ $mvv_data[2]->name }}</h4>
                        </div>
                        <div class="card-flip-back shadow">
                            <p class="lead">{{ $mvv_data[2]->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-white shadow text-center">
                            <img src="{{ asset('assets/img/valores.png') }}" alt="Valores" class="mission-vision-icon mb-3">
                            <h4 class="fw-bold">{{ $mvv_data[3]->name }}</h4>
                        </div>
                        <div class="card-flip-back shadow">
                            <p>{!! str_replace(' ', '<br>', e($mvv_data[3]->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-secondary mb-3">Lo que dicen nuestros alumnos</h2>
            <div class="bg-primary mx-auto title-underline"></div>
        </div>

        <div class="position-relative testimonials-container">
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner testimonials-carousel-inner">
                    <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>M</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">María González</h6>
                                            <small class="text-muted">Licenciatura en Derecho</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"Excelente institución con profesores muy capacitados. Logré terminar mi licenciatura mientras trabajaba gracias a la flexibilidad de horarios."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>J</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Juan Pérez</h6>
                                            <small class="text-muted">Bachillerato</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"Terminé mi bachillerato en tiempo récord. El sistema en línea es muy completo y el apoyo de los maestros es excepcional."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>A</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Ana Martínez</h6>
                                            <small class="text-muted">Licenciatura en Psicología</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"La mejor decisión que pude tomar. El plan de estudios es muy completo y ahora tengo mi título profesional."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>C</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Carlos Ramírez</h6>
                                            <small class="text-muted">Licenciatura en Contabilidad</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"El CEC me dio la oportunidad de crecer profesionalmente. Hoy trabajo en una firma importante gracias a mi formación."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>L</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Laura Sánchez</h6>
                                            <small class="text-muted">Secundaria</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"Me encanta estudiar aquí. Los maestros son muy pacientes y siempre están dispuestos a ayudar. Mis calificaciones han mejorado mucho."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>R</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Roberto Torres</h6>
                                            <small class="text-muted">Licenciatura en Administración</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"Estudiar en CEC fue la mejor inversión. Ahora tengo mi propio negocio y aplico todo lo aprendido cada día."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>P</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Patricia Flores</h6>
                                            <small class="text-muted">Licenciatura en Pedagogía</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"La formación que recibí me permitió conseguir trabajo como maestra en una escuela prestigiosa. Eternamente agradecida con el CEC."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>D</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Diego Morales</h6>
                                            <small class="text-muted">Carrera Técnica en Informática</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"Los conocimientos prácticos que adquirí me abrieron las puertas en el mundo de la tecnología. Recomiendo ampliamente el CEC."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar">
                                            <strong>S</strong>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Sofía Hernández</h6>
                                            <small class="text-muted">Bachillerato en línea</small>
                                        </div>
                                    </div>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted">"Pude terminar mi bachillerato desde casa mientras cuidaba a mi familia. La modalidad en línea es perfecta para mamás como yo."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="carousel-indicators carousel-indicators-bottom mt-4">
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Grupo 1"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1" class="bg-primary" aria-label="Grupo 2"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2" class="bg-primary" aria-label="Grupo 3"></button>
                </div>
            </div>

            <button class="position-absolute start-0 carousel-nav-btn carousel-nav-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center shadow testimonial-avatar">
                    <i class="bi bi-chevron-left text-white fs-4"></i>
                </div>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="position-absolute end-0 carousel-nav-btn carousel-nav-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center shadow testimonial-avatar">
                    <i class="bi bi-chevron-right text-white fs-4"></i>
                </div>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>

<section class="py-4 cta-section">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-3 cta-title">¿Listo para comenzar tu futuro?</h2>
        <p class="lead mb-3 cta-text">Únete a cientos de estudiantes que ya están construyendo su camino al éxito profesional</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg rounded-pill px-5">
            Solicita información ahora <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>
</section>

@endsection
