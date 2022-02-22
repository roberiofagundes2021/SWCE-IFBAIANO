<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenacao_Curso extends Model
{
    use HasFactory;

    protected $table="coordenacao__cursos";
    protected $guarded = [];
}
