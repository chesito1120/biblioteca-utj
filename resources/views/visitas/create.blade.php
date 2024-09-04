@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Registrar Visita a la Biblioteca</h2>
            <hr>
            <form action="{{ route('visitas.store') }}" method="post" class="col-lg-7">
                @csrf
                @method('POST')
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="nombre_completo">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" required />
                </div>

                <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" value="{{ old('matricula') }}" required />
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
                    <label for="tipo_usuario">usuario</label>
                    <select class="form-control" id="tipo_usuario" name="tipo_usuario" required>
                        <option value="">Seleccione su usuario</option>
                        <option value="maestro">Maestro</option>
                        <option value="alumno">Alumno</option>
                        <option value="otro">Otro</option>
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
                    <label for="sexo">Sexo</label>
                    <select class="form-control" id="sexo" name="sexo" required>
                        <option value="">Seleccione su sexo</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <a href="/home" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success">Registrar Visita</button>
            </form>
        </div>
    </div>

@endsection
