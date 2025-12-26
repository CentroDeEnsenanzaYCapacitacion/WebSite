<div class="bg-primary text-white py-2">
    <div class="container">
        <div class="d-flex justify-content-end gap-4 small">
            <span>Bachillerato</span>
            <span>Licenciatura</span>
            <a href="{{ route('student.login') }}" class="text-white text-decoration-none">Área de alumno</a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/cec.png') }}" alt="CEC" height="150" class="d-none d-md-block">
            <img src="{{ asset('assets/img/cec.png') }}" alt="CEC" height="109" class="d-md-none">
        </a>

        <img src="{{ asset('assets/img/dr.png') }}" alt="Dragones" height="96" class="d-none d-lg-block logo-dragon">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Oferta educativa
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="{{ route('secondary') }}">Secundaria</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Bachillerato</h6></li>
                        <li><a class="dropdown-item small" href="#">En un exámen (en línea)</a></li>
                        <li><a class="dropdown-item small" href="#">6, 9, o 12 meses (en línea)</a></li>
                        <li><a class="dropdown-item small" href="#">18 meses (presencial / en línea / mixta)</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Licenciaturas</h6></li>
                        <li><a class="dropdown-item small" href="#">Derecho</a></li>
                        <li><a class="dropdown-item small" href="#">Contabilidad</a></li>
                        <li><a class="dropdown-item small" href="#">Psicología</a></li>
                        <li><a class="dropdown-item small" href="#">Pedagogía</a></li>
                        <li><a class="dropdown-item small" href="#">Administración</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Carreras técnicas</h6></li>
                        <li><a class="dropdown-item small" href="#">Inglés</a></li>
                        <li><a class="dropdown-item small" href="#">Informática</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Cursos especiales (Kids)</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('crews') ? 'active fw-bold' : '' }}" href="{{ route('crews') }}">Planteles</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold' : '' }}" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>

            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4">
                Inscríbete ahora
            </a>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/img/cec.png') }}" alt="CEC" height="60">
            <img src="{{ asset('assets/img/dr.png') }}" alt="Dragones" height="45">
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('secondary') }}">Secundaria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('crews') }}">Planteles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
            </li>
            <li class="nav-item mt-3">
                <a href="{{ route('contact') }}" class="btn btn-primary w-100 rounded-pill">
                    Inscríbete ahora
                </a>
            </li>
        </ul>
    </div>
</div>
