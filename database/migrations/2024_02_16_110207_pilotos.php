<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros',function(Blueprint $table){
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('escuderia_id')->unsigned();
            $table->string('img_piloto');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nacionalidad');
            $table->integer('dorsal');
            $table->timestamps();
            $table->foreign('escuderia_id')->references('id')->on('escuderias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilotos');
    }
};
