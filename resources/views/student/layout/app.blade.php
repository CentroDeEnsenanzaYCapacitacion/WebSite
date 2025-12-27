<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plataforma del Alumno')</title>
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #fed7aa 0%, #fdba74 50%, #fb923c 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        
        .navbar {
            background: linear-gradient(135deg, #ffffff 0%, #fff7ed 100%);
            box-shadow: 0 4px 6px rgba(249, 115, 22, 0.1);
            padding: 0;
        }

        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .navbar-brand img {
            height: 45px;
            width: auto;
        }

        .navbar-brand h1 {
            font-size: 20px;
            font-weight: 600;
            color: #2d3748;
        }

        .navbar-user {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: #2d3748;
        }

        .user-role {
            font-size: 12px;
            color: #718096;
        }

        .btn-logout {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-logout:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.4);
        }

        
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 32px 24px;
            flex: 1;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(249, 115, 22, 0.15);
            padding: 40px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        
        .footer {
            background: linear-gradient(135deg, #ffffff 0%, #fff7ed 100%);
            border-top: 2px solid rgba(249, 115, 22, 0.2);
            margin-top: auto;
            padding: 32px 24px;
            text-align: center;
            color: #9a3412;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                gap: 16px;
            }

            .navbar-user {
                flex-direction: column;
                width: 100%;
            }

            .user-info {
                text-align: center;
            }

            .btn-logout {
                width: 100%;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-brand">
                <img src="{{ asset('assets/img/dr.png') }}" alt="CEC Logo">
                <h1>Plataforma del Alumno</h1>
            </div>
            <div class="navbar-user">
                <div class="user-info">
                    <div class="user-name">{{ Auth::guard('student')->user()->name }} {{ Auth::guard('student')->user()->surnames }}</div>
                    <div class="user-role">Estudiante</div>
                </div>
                <form action="{{ route('student.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </nav>

    
    <main class="main-container">
        @yield('content')
    </main>

    
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Centro de Enseñanza y Capacitación. Todos los derechos reservados.</p>
    </footer>

    @stack('scripts')
</body>
</html>
