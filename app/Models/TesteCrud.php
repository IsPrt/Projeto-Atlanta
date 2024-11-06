<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesteCrud extends Model
{
    // Se a tabela não segue a convenção de nomes, defina o nome da tabela
    protected $table = 'teste_cruds';
    
    // Defina os atributos que podem ser preenchidos em massa
    protected $fillable = ['id', 'name', 'status'];
}
