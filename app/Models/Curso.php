<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'data', 'status', 'imagem', 'url'];

    public function preInscricoes()
    {
        return $this->hasMany(PreInscricao::class);
    }
    
}
