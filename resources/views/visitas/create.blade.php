@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Registrar Visita a la Biblioteca</h2>
            <hr>
            <form action="{{ route('visitas.store') }}" method="post" class="col-lg-7">
                @csrf

                <div class="form-group">
                    <label for="tipo_usuario">Tipo de Usuario</label>
                    <select class="form-control" id="tipo_usuario" name="tipo_usuario" required>
                        <option value="">Seleccione su tipo de usuario</option>
                        <option value="alumno">Alumno</option>
                        <option value="maestro">Maestro</option>
                    </select>
                </div>

                <!-- Campos comunes -->
                <div class="form-group">
                    <label for="nombre_completo">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" required />
                </div>
                <div class="form-group">
                    <label for="carrera">Carrera</label>
                    <select class="form-control" id="carrera" name="carrera" required>
                        <!-- Opciones de carrera -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="grado">Grado</label>
                    <input type="text" class="form-control" id="grado" name="grado" value="{{ old('grado') }}" required />
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo</label>
                    <input type="text" class="form-control" id="grupo" name="grupo" value="{{ old('grupo') }}" required />
                </div>
                <div class="form-group">
                    <label for="actividad">Actividad</label>
                    <input type="text" class="form-control" id="actividad" name="actividad" value="{{ old('actividad') }}" required />
                </div>

                <!-- Campos específicos de alumnos -->
                <div id="alumnoFields" style="display: none;">
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
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
                        <label for="cantidad_alumnos_hombres">Cantidad de Alumnos Hombres</label>
                        <input type="number" class="form-control" id="cantidad_alumnos_hombres" name="cantidad_alumnos_hombres" />
                    </div>
                    <div class="form-group">
                        <label for="cantidad_alumnos_mujeres">Cantidad de Alumnos Mujeres</label>
                        <input type="number" class="form-control" id="cantidad_alumnos_mujeres" name="cantidad_alumnos_mujeres" />
                    </div>
                </div>

                <a href="/home" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success">Registrar Visita</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('tipo_usuario').addEventListener('change', function () {
            let tipoUsuario = this.value;
            document.getElementById('alumnoFields').style.display = tipoUsuario === 'alumno' ? 'block' : 'none';
            document.getElementById('maestroFields').style.display = tipoUsuario === 'maestro' ? 'block' : 'none';
        });
    </script>

@endsection
