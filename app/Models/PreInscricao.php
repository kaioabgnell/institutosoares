<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreInscricao extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email', 'curso_id', 'status'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

}
