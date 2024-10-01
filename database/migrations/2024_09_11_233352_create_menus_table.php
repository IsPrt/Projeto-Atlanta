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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(true); // por padrao vem verdadeiro
            $table->integer('filed_by')->nullable(); // pode ser nulo
            $table->timestamps();
        });
    }

    // php artisan migrate:fresh --seed
    // esse comando recria o banco de dados rodando as migrations do 0
    // assim ele vai gerar essa tabela com as alteracoes que fizemos

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};

