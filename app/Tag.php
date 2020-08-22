<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produtos;


class Tag extends Model
{
    protected $fillable = [
        'nome'
    ];
    public function produtos() {
        return $this->belongsToMany(Tag::class);
    }
}
