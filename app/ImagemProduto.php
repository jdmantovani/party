<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemProduto extends Model
{

    protected $table = 'imagem_produtos';
    protected $fillable = [ //faz o laravel aceitar popular em massa
        'caminhoDaImagem'
    ];
}
