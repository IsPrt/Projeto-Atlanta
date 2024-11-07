<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ddd',
        'number',
    ];

    /**
     * Define o relacionamento com o modelo User.
     * Um telefone pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
