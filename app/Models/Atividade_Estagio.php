<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade_Estagio extends Model
{
    use HasFactory;
     protected $table="atividade__estagios";
    protected $guarded = [];

     public function estagiario()
    {
        return $this->belongsTo(Estagiario::class);
    }
}
