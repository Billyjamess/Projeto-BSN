<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vagas extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','id_linguagem'];
}
