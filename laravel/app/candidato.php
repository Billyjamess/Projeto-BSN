<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidato extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','email','id_linguagem','id_vagas'];
}
