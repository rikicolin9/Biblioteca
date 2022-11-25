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
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->id('idLibro');
            $table->unsignedBigInteger('id_autor')->nullable();
            $table->integer('isbn'); 
            $table->string('titulo');
            $table->string('autor');
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('email')->unique();
            $table->date('fecha');
            $table->timestamps();
            $table->foreign("id_autor")
                ->references("idAutor")
                ->on("tb_autores")
                ->onUpdate("cascade")
                ->onDelete("set null");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
