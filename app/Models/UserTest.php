<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    protected $table = 'users_tests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seu_email',
        'nome',
        'email',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep'
    ];

}
