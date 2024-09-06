<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métricas de la Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Métricas de la Biblioteca</h1>

        <!-- Sección de métricas -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total de Visitas</div>
                    <div class="card-body">
                        <h5 class="card-title">1234</h5> <!-- Puedes reemplazar esto con datos dinámicos -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Carrera con más visitas</div>
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería Industrial</h5> <!-- Dato dinámico -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Computadoras Usadas</div>
                    <div class="card-body">
                        <h5 class="card-title">50</h5> <!-- Dato dinámico -->
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('visitas.create') }}" class="btn btn-secondary mt-4">Regresar al Registro de Visitas</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
