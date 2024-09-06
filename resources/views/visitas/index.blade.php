<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-edit {
            background-color: #007bff;
            color: white;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .success {
            background-color: #d4edda;
            padding: 10px;
            border: 1px solid #c3e6cb;
            color: #155724;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Lista de Visitas</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Matrícula</th>
                <th>Tipo de Usuario</th>
                <th>Carrera</th>
                <th>Grado</th>
                <th>Grupo</th>
                <th>Actividad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{ $visita->nombre_completo }}</td>
                <td>{{ $visita->matricula ?? 'N/A' }}</td>
                <td>{{ $visita->tipo_usuario }}</td>
                <td>{{ $visita->carrera }}</td>
                <td>{{ $visita->grado }}</td>
                <td>{{ $visita->grupo }}</td>
                <td>{{ $visita->actividad }}</td>
                <td>
                    <!-- Enlaces para editar o eliminar la visita -->
                    <a href="{{ route('visitas.edit', $visita->id) }}" class="btn btn-edit">Editar</a>
                    <form action="{{ route('visitas.destroy', $visita->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('¿Estás seguro de que deseas eliminar esta visita?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
