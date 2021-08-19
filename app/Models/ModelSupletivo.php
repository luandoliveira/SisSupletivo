<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSupletivo extends Model
{
    protected $table="supletivo";
    protected $fillable = ['sup_num_aluno'];
}
