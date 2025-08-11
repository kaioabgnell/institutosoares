<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntariosdoacoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'email', 'observacao', 'status', 'tipo'
    ];
}
