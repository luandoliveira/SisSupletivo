<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSupletivo extends Model
{
    protected $table="aluno";
    protected $fillable = ['sup_num_aluno', 'sup_nome'];

    public function relUsers(){

        return $this->hasMany('App\Models\User','id', 'id_user');  #um pra muitos
     }
}


