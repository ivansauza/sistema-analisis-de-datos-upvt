<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('clave', ['enero-abril', 'mayo-agosto', 'septiembre-diciembre']);
            $table->year('anio');
            $table->boolean('actual')->nullable();
            $table->boolean('estado')->nullable();
            $table->integer('posicion')->nullable();
            $table->integer('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}
