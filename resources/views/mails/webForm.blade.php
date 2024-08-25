<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h1>Nuevo mensaje de contacto</h1>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Teléfono:</strong> {{ $details['cel'] }}</p>
    <p><strong>Correo electrónico:</strong> {{ $details['mail'] }}</p>
    <p><strong>Plantel:</strong> {{ $details['crew'] }}</p>
    <p><strong>Curso:</strong> {{ $details['course'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['msg'] }}</p>
</body>
</html>
