<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Visitas</title>
    <!-- Agrega algún estilo básico para mejorar la apariencia -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f4f4f4;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .alert-success {
            color: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Lista de Visitas</h1>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @forelse($visitas as $visita)
            <li>
                <strong>Nombre:</strong> {{ $visita->nombre_completo }}<br>
                <strong>Matrícula:</strong> {{ $visita->matricula }}<br>
                <strong>Carrera:</strong> {{ $visita->carrera }}<br>
                <strong>Tipo de Usuario:</strong> {{ $visita->tipo_usuario }}<br>
                <strong>Grado:</strong> {{ $visita->grado }}<br>
                <strong>Grupo:</strong> {{ $visita->grupo }}<br>
                <strong>Sexo:</strong> {{ $visita->sexo }}
            </li>
        @empty
            <li>No hay visitas registradas.</li>
        @endforelse
    </ul>
</body>
</html>
