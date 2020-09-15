<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Produtos extends Model
{
    protected $fillable = [ //faz o laravel aceitar popular em massa
        'nome', 
        'descricao', 
        'valor',
        'url'
    ];

    //relaciona produto com tag
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
