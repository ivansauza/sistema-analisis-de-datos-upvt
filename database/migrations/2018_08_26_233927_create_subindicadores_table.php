<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubindicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subindicadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('procedimiento')->nullable();
            $table->integer('valor_meta');
            $table->longText('nota')->nullable();
            $table->integer('posicion')->nullable();
            $table->integer('indicador_id')->unsigned();
            $table->foreign('indicador_id')->references('id')->on('indicadores');
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
        Schema::dropIfExists('subindicadores');
    }
}
