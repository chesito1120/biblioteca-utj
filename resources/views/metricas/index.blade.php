<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métricas de Visitas</title>
</head>
<body>
    <h1>Métricas de Visitas a la Biblioteca</h1>

    <h2>Maestros</h2>
    <p>Hombres: {{ $maestrosHombres }}</p>
    <p>Mujeres: {{ $maestrosMujeres }}</p>

    <h2>Alumnos</h2>
    <p>Hombres: {{ $alumnosHombres }}</p>
    <p>Mujeres: {{ $alumnosMujeres }}</p>
    


    <h2>Carrera con Más Visitas</h2>
    <p>Carrera más visitada: {{ $carreraMasVisitada }}</p>
 


    <h2>Visitas por Servicio</h2>
    <p>Acervo: {{ $acervo }}</p>
    <p>Computo: {{ $computo }}</p>
    <p>Préstamo: {{ $prestamo }}</p>

    <h2>Total de Visitas</h2>
    <p>Total de Visitas: {{ $totalVisitas }}</p>  

</body>
</html>