<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CEC - Centro Educativo Cultural')</title>
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    @stack('styles')
</head>
<body>
    @include('includes.header')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tooltips.js') }}"></script>

    @stack('scripts')
</body>
</html>
