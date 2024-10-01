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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Cria uma coluna `id` auto-incrementável.
            $table->string('title'); // Cria uma coluna `title` do tipo string.
            $table->text('body'); // Cria uma coluna `body` do tipo texto.
            $table->timestamps(); // Cria as colunas `created_at` e `updated_at`.
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('posts'); // Remove a tabela `posts` se existir.
    }
};