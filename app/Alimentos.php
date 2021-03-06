<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Alimentos extends Model
{
    protected $fillable = [ //faz o laravel aceitar popular em massa
            'nome', 
            'descricao', 
            'valor'
    ];
    //relaciona alimento com tag
        public function tags()
        {
            return $this->belongsToMany('App\Tag');
        }
    }
