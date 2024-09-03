<!DOCTYPE html>
<html>
<head>
    <title>Visitas</title>
</head>
<body>
    <h1>Lista de Visitas</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($visitas as $visita)
            <li>{{ $visita->nombre_completo }} - {{ $visita->matricula }}</li>
        @endforeach
    </ul>
</body>
</html>
