<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelInscricao extends Model
{
   protected $table = "inscricoes";
   protected $fillable=['nomeAluno','email','cpf','endereco','empresa','telefone','celular','tipo','cursoId'];
   public function relCursos(){
    return $this->hasOne('app\Models\Models\ModelCursos','id','cursoId');
}
}

