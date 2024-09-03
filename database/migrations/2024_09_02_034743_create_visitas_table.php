<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('matricula');
            $table->enum('carrera', [
                'Licenciatura en Administración',
                'TSU Gestión del Capital Humano',
                'Ingeniería Ambiental y Sustentabilidad',
                'TSU Gestión Ambiental',
                'Ingeniería en Química Farmacéutica',
                'TSU Química Tecnología Farmacéutica',
                'Licenciatura en Asesor Financiero',
                'TSU Asesor Financiero',
                'Ingeniería Mecatrónica',
                'TSU Automatización',
                'TSU Robótica',
                'Licenciatura en Negocios y Mercadotecnia',
                'TSU Mercadotecnia',
                'Ingeniería Industrial',
                'TSU Automotriz',
                'TSU Maquinados de Precisión',
                'TSU Moldeo de Plástico',
                'Ingeniería en Mantenimiento Industrial',
                'TSU Mantenimiento a maquinaria pesada',
                'TSU Mantenimiento Industrial',
                'Ingeniería en Tecnologías de la Información e Innovación Digital',
                'TSU Entornos Virtuales y Negocios Digitales',
                'TSU Desarrollo de Software Multiplataforma'
            ]);
            $table->enum('tipo_usuario', ['alumno', 'maestro']);
            $table->enum('grado', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->string('grupo');
            $table->enum('sexo', ['masculino', 'femenino', 'otro']);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
};
