<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Visita</title>
    <!-- CSS básico para darle un estilo neutro -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            margin-right: 10px;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Registrar Visita a la Biblioteca</h2>
        <hr>
        <form action="{{ route('visitas.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="tipo_usuario">Tipo de Usuario</label>
                <select id="tipo_usuario" name="tipo_usuario" required>
                    <option value="">Seleccione su tipo de usuario</option>
                    <option value="alumno">Alumno</option>
                    <option value="maestro">Maestro</option>
                </select>
            </div>

            <!-- Campos comunes -->
            <div class="form-group">
                <label for="turno">Turno</label>
                <select id="turno" name="turno" required>
                    <option value="">Seleccione el turno</option>
                    <option value="matutino">Matutino</option>
                    <option value="vespertino">Vespertino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nombre_completo">Nombre Completo</label>
                <input type="text" id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" required />
            </div>

            <div class="form-group">
                <label for="carrera">Carrera</label>
                <select class="form-control" id="carrera" name="carrera" required>
                    <option value="">Seleccione su carrera</option>
                    <option value="Licenciatura en Administración">Licenciatura en Administración</option>
                    <option value="TSU Gestión del Capital Humano">TSU Gestión del Capital Humano</option>
                    <option value="Ingeniería Ambiental y Sustentabilidad">Ingeniería Ambiental y Sustentabilidad</option>
                    <option value="TSU Gestión Ambiental">TSU Gestión Ambiental</option>
                    <option value="Ingeniería en Química Farmacéutica">Ingeniería en Química Farmacéutica</option>
                    <option value="TSU Química Tecnología Farmacéutica">TSU Química Tecnología Farmacéutica</option>
                    <option value="Licenciatura en Asesor Financiero">Licenciatura en Asesor Financiero</option>
                    <option value="TSU Asesor Financiero">TSU Asesor Financiero</option>
                    <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                    <option value="TSU Automatización">TSU Automatización</option>
                    <option value="TSU Robótica">TSU Robótica</option>
                    <option value="Licenciatura en Negocios y Mercadotecnia">Licenciatura en Negocios y Mercadotecnia</option>
                    <option value="TSU Mercadotecnia">TSU Mercadotecnia</option>
                    <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                    <option value="TSU Automotriz">TSU Automotriz</option>
                    <option value="TSU Maquinados de Precisión">TSU Maquinados de Precisión</option>
                    <option value="TSU Moldeo de Plástico">TSU Moldeo de Plástico</option>
                    <option value="Ingeniería en Mantenimiento Industrial">Ingeniería en Mantenimiento Industrial</option>
                    <option value="TSU Mantenimiento a Maquinaria Pesada">TSU Mantenimiento a Maquinaria Pesada</option>
                    <option value="TSU Mantenimiento Industrial">TSU Mantenimiento Industrial</option>
                    <option value="Ingeniería en Tecnologías de la Información e Innovación Digital">Ingeniería en Tecnologías de la Información e Innovación Digital</option>
                    <option value="TSU Entornos Virtuales y Negocios Digitales">TSU Entornos Virtuales y Negocios Digitales</option>
                    <option value="TSU Desarrollo de Software Multiplataforma">TSU Desarrollo de Software Multiplataforma</option>
                </select>
            </div>

            <div class="form-group">
                <label for="grado">Grado</label>
                <input type="text" id="grado" name="grado" value="{{ old('grado') }}" required />
            </div>

            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input type="text" id="grupo" name="grupo" value="{{ old('grupo') }}" required />
            </div>

            <div class="form-group">
                <label for="actividad">Actividad</label>
                <input type="text" id="actividad" name="actividad" value="{{ old('actividad') }}" required />
            </div>

            <!-- Campos específicos de alumnos -->
            <div id="alumnoFields" style="display: none;">
                <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" id="matricula" name="matricula" value="{{ old('matricula') }}" />
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo">
                        <option value="">Seleccione su sexo</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            </div>

            <!-- Campos específicos de maestros -->
            <div id="maestroFields" style="display: none;">
                <div class="form-group">
                    <label for="cantidad_hombres">Cantidad de Alumnos Hombres</label>
                    <input type="number" id="cantidad_hombres" name="cantidad_hombres" />
                </div>
                <div class="form-group">
                    <label for="cantidad_mujeres">Cantidad de Alumnos Mujeres</label>
                    <input type="number" id="cantidad_mujeres" name="cantidad_mujeres" />
                </div>
            </div>

            <a href="/home" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Registrar Visita</button>
        </form>
    </div>

    <script>
        document.getElementById('tipo_usuario').addEventListener('change', function () {
            let tipoUsuario = this.value;
            document.getElementById('alumnoFields').style.display = tipoUsuario === 'alumno' ? 'block' : 'none';
            document.getElementById('maestroFields').style.display = tipoUsuario === 'maestro' ? 'block' : 'none';
        });
    </script>

</body>
</html>
