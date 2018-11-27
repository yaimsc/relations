<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpleadoProyectoParticipa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id');
            $table->integer('proyecto_id');
            $table->date('fechainicio')->nullable();
            $table->date('fechafin')->nullable(); 
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('casacde'); 
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('casacde'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_proyecto');
    }
}
