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
                @php
                    $opinionGroups = $opinions->chunk(3);
                @endphp
                <div class="carousel-inner testimonials-carousel-inner">
                    @foreach ($opinionGroups as $groupIndex => $group)
                        <div class="carousel-item {{ $groupIndex === 0 ? 'active' : '' }}">
                            <div class="row g-4">
                                @foreach ($group as $opinion)
                                    @php
                                        $opinionName = $opinion->name
                                            ?? $opinion->student_name
                                            ?? $opinion->nombre
                                            ?? $opinion->title
                                            ?? '';
                                        $opinionProgram = $opinion->course
                                            ?? $opinion->program
                                            ?? $opinion->career
                                            ?? $opinion->degree
                                            ?? $opinion->curso
                                            ?? $opinion->carrera
                                            ?? $opinion->programa
                                            ?? $opinion->nivel
                                            ?? '';
                                        $opinionText = $opinion->opinion
                                            ?? $opinion->comment
                                            ?? $opinion->description
                                            ?? $opinion->texto
                                            ?? '';
                                        $ratingRaw = $opinion->rating ?? $opinion->stars ?? 5;
                                        $ratingValue = (float) str_replace(',', '.', (string) $ratingRaw);
                                        $ratingValue = max(0, min(5, $ratingValue));
                                        $fullStars = (int) floor($ratingValue);
                                        $hasHalfStar = ($ratingValue - $fullStars) >= 0.5;
                                        $initial = $opinionName !== '' ? strtoupper(mb_substr($opinionName, 0, 1, 'UTF-8')) : '?';
                                        $avatarPath = $opinion->image
                                            ?? $opinion->photo
                                            ?? $opinion->avatar
                                            ?? $opinion->foto
                                            ?? $opinion->imagen
                                            ?? $opinion->img
                                            ?? '';
                                        if ($avatarPath === '') {
                                            $avatarPath = (string) (($groupIndex * 3) + $loop->iteration);
                                        }
                                        $avatarPath = trim((string) $avatarPath);
                                        $avatarUrl = '';
                                        $avatarBase = '';
                                        $avatarExts = '';
                                        if ($avatarPath !== '') {
                                            if (preg_match('#^https?://#i', $avatarPath) || substr($avatarPath, 0, 2) === '//') {
                                                $avatarUrl = $avatarPath;
                                            } else {
                                                $avatarPath = ltrim($avatarPath, '/');
                                                $avatarPath = preg_replace('#^assets/img/(carousel|opinions)/#i', '', $avatarPath);
                                                $avatarPath = preg_replace('#^(carousel|opinions)/#i', '', $avatarPath);
                                                $avatarExt = '';
                                                if (preg_match('/\.(jpg|jpeg|png)$/i', $avatarPath, $matches)) {
                                                    $avatarExt = strtolower($matches[1]);
                                                    $avatarPath = preg_replace('/\.(jpg|jpeg|png)$/i', '', $avatarPath);
                                                } else {
                                                    $avatarExt = 'jpg';
                                                }
                                                $avatarBase = rtrim($opinions_url, '/') . '/' . $avatarPath;
                                                $avatarUrl = $avatarBase . '.' . $avatarExt;
                                                $fallbackExts = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
                                                $fallbackExts = array_values(array_filter($fallbackExts, function ($ext) use ($avatarExt) {
                                                    return strtolower($ext) !== $avatarExt;
                                                }));
                                                $avatarExts = implode(',', $fallbackExts);
                                            }
                                        }
                                    @endphp
                                    <div class="col-md-4">
                                        <div class="card border-0 shadow testimonial-card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3 testimonial-avatar testimonial-avatar--profile overflow-hidden {{ $avatarUrl ? 'testimonial-avatar--image' : '' }}">
                                                        @if ($avatarUrl)
                                                            <img src="{{ $avatarUrl }}" alt="{{ $opinionName }}" class="testimonial-avatar-img" onload="if(this.parentElement){this.parentElement.classList.add('testimonial-avatar--cover');this.parentElement.style.backgroundImage='url(' + this.src + ')';}this.classList.add('testimonial-avatar-img--hidden');" @if ($avatarBase) data-avatar-base="{{ $avatarBase }}" data-avatar-exts="{{ $avatarExts }}" onerror="if(!this.dataset.avatarExts){this.onerror=null;return;}var exts=this.dataset.avatarExts.split(',');if(!exts.length){this.onerror=null;return;}var ext=exts.shift();this.dataset.avatarExts=exts.join(',');this.src=this.dataset.avatarBase+'.'+ext;" @endif>
                                                        @else
                                                            <strong>{{ $initial }}</strong>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">{{ $opinionName }}</h6>
                                                        @if ($opinionProgram !== '')
                                                            <small class="text-muted">{{ $opinionProgram }}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="text-warning mb-3">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $fullStars)
                                                            <i class="bi bi-star-fill"></i>
                                                        @elseif ($hasHalfStar && $i === ($fullStars + 1))
                                                            <i class="bi bi-star-half"></i>
                                                        @else
                                                            <i class="bi bi-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <p class="text-muted testimonial-text">"{{ $opinionText }}"</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="carousel-indicators carousel-indicators-bottom mt-4">
                    @foreach ($opinionGroups as $groupIndex => $group)
                        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="{{ $groupIndex }}" class="{{ $groupIndex === 0 ? 'active' : '' }} bg-primary" aria-current="{{ $groupIndex === 0 ? 'true' : 'false' }}" aria-label="Grupo {{ $groupIndex + 1 }}"></button>
                    @endforeach
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
