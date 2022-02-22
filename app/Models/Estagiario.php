<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estagio;
use App\Models\Curso;
use App\Models\Professor_Orientador;
use App\Models\Supervisor_Estagiario;

class Estagiario extends Model
{
    use HasFactory;


    protected $table="estagiarios";
    protected $guarded = [];

      public function estagio()
    {
        return $this->belongsTo(Estagio::class);
    }

     public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

     public function professor_orientador()
    {
        return $this->belongsTo(Professor_Orientador::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor_Estagiario::class, 'supervisor_estagiario_id', 'id');
    }

 
}
