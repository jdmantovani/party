<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Decoracao extends Model
{
    protected $fillable = [ //faz o laravel aceitar popular em massa
            'nome', 
            'descricao', 
            'valor'
        ];
//relaciona decoracao com tag
        public function tags()
        {
            return $this->belongsToMany('App\Tag');
    }
}