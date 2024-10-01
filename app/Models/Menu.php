<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Se a tabela não segue a convenção de nomes, defina o nome da tabela
    protected $table = 'menus';
    
    // Se a tabela não tem timestamps, desative a opção
    public $timestamps = false;
    
    // Defina os atributos que podem ser preenchidos em massa
    protected $fillable = ['name', 'status', 'filed_by'];
}
