<footer class="bg-secondary text-white mt-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="{{ asset('assets/img/dr.png') }}" alt="CEC Logo" height="60" class="mb-3">
                <p class="text-white-50">
                    Centro de Enseñanza y Capacitación comprometido con la excelencia educativa y el desarrollo integral de nuestros estudiantes.
                </p>
            </div>

            <div class="col-lg-2 col-md-4">
                <h5 class="mb-3">Oferta Educativa</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('secondary') }}" class="text-white-50 text-decoration-none">Secundaria</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Bachillerato</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Licenciaturas</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Carreras Técnicas</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4">
                <h5 class="mb-3">Enlaces</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Inicio</a></li>
                    <li class="mb-2"><a href="{{ route('crews') }}" class="text-white-50 text-decoration-none">Planteles</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none">Contacto</a></li>
                    <li class="mb-2"><a href="{{ route('student.login') }}" class="text-white-50 text-decoration-none">Área de Alumno</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4">
                <h5 class="mb-3">Síguenos</h5>
                <div class="d-flex gap-3 mb-3">
                    <a href="https://www.facebook.com/dragonescec/" target="_blank" class="text-white">
                        <i class="bi bi-facebook fs-4"></i>
                    </a>
                    <a href="https://www.instagram.com/dragonescec" target="_blank" class="text-white">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>
                    <a href="https://www.tiktok.com/@dragonescec" target="_blank" class="text-white">
                        <i class="bi bi-tiktok fs-4"></i>
                    </a>
                    <a href="https://www.threads.net/@dragonescec" target="_blank" class="text-white">
                        <i class="bi bi-threads fs-4"></i>
                    </a>
                    <a href="https://www.youtube.com/@DragonesOnAir" target="_blank" class="text-white">
                        <i class="bi bi-youtube fs-4"></i>
                    </a>
                </div>
                <p class="text-white-50 small">
                    <strong>Email:</strong> info@cec.edu.mx
                </p>
            </div>
        </div>

        <hr class="my-4 border-white opacity-25">

        <div class="text-center text-white-50 small">
            <p class="mb-0">&copy; {{ date('Y') }} Centro de Enseñanza y Capacitación. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
