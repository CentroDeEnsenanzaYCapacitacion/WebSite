<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title') - CEC Área del Alumno</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    @stack('styles')
</head>
<body id="main_page">
    <!-- Header del área de estudiante -->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <div class="tools">
                    <ul>
                        <li><strong>Bienvenido, {{ Auth::user()->name }}</strong></li>
                        <li>
                            <form action="{{ route('student.logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer; padding: 0; text-decoration: underline;">
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div style="clear: both;"></div>
                <h1>
                    <a href="{{ route('student.dashboard') }}">
                        <img src="{{ asset('assets/img/dr.png') }}" alt="CEC">
                    </a>
                </h1>
                <nav>
                    <ul class="sf-menu">
                        <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('home') }}">Volver al sitio</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container_12">
            <div class="grid_12">
                <p>&copy; {{ date('Y') }} Centro de Enseñanza y Capacitación. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script>
    $(window).load(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
    })
    </script>
    @stack('scripts')
</body>
</html>
