<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //criar a tabela do banco de dados
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dataEvento');//fora do parentese é o tipo da variavel
            $table->longText('descricao');
            $table->timestamps(); // ver o horario e data 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // se já existir apague a tabela registro e utiliza essa
    {
        Schema::dropIfExists('registro');
    }
};
