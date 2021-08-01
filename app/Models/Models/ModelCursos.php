<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCursos extends Model
{
   protected $table = "cursos";

   public function relInscricao(){
   return $this->hasMany('app\Models\Models\ModelInscricao','id');
}
}
