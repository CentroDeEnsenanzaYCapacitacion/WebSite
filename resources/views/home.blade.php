@extends('layout.mainLayout')
@section('title', 'CEC - Tu futuro comienza aquí')

@push('styles')
<style>
.hero-section {
    background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('{{ asset('assets/img/bg01.jpg') }}');
    background-size: cover;
    background-position: center;
    opacity: 0.1;
}
</style>
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
                                <img src="{{ $carousel_url }}{{ $item->id }}.jpg" class="d-block w-100" alt="{{ $item->title }}" style="height: 400px; object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                                    <h5 class="fw-bold">{{ $item->title }}</h5>
                                    <p>{{ $item->description }}</p>
                                </div>
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
            <div class="bg-primary mx-auto" style="width: 80px; height: 4px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front bg-white shadow text-center">
                            <img src="{{ asset('assets/img/mision.png') }}" alt="Misión" class="img-fluid mb-3" style="max-width: 150px;">
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
                            <img src="{{ asset('assets/img/vision.png') }}" alt="Visión" class="img-fluid mb-3" style="max-width: 150px;">
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
                            <img src="{{ asset('assets/img/valores.png') }}" alt="Valores" class="img-fluid mb-3" style="max-width: 150px;">
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

<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-secondary mb-3">Lo que dicen nuestros alumnos</h2>
            <div class="bg-primary mx-auto" style="width: 80px; height: 4px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
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
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
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
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
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
</section>

<section class="py-5 bg-gradient text-white" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">¿Listo para comenzar tu futuro?</h2>
        <p class="lead mb-4">Únete a cientos de estudiantes que ya están construyendo su camino al éxito profesional</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg rounded-pill px-5">
            Solicita información ahora <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.floor(current) + '+';
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target + '+';
            }
        };
        updateCounter();
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target.querySelector('[data-count]');
                if (counter && counter.textContent === '0') {
                    animateCounter(counter);
                }
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter-item').forEach(item => {
        observer.observe(item);
    });
});
</script>
@endpush
