<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre_persona");
            $table->string("edad_persona");
            $table->string("telefono_persona");
            $table->string("sexo_persona");
            $table->date("fecha_nac");
            $table->unsignedBigInteger('id_ocupacion')->unsigned();
            $table->foreign('id_ocupacion')->references('id')->on('ocupaciones')->onDelete('cascade');
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
        Schema::dropIfExists('persona');
    }
}
