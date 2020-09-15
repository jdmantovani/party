<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class SiteParty extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function login()
    {
        return view ('login');
    }

    public function faq()
    {
        return view ('faq');
    }

    public function produtoIndividual()
    {
        return view ('produtoIndividual');
    }

    public function produtos()
    {
        $produtos = Produtos::all();
        return view ('produtos')->with('produtos', $produtos);

    }

    public function registro()
    {
        return view ('registro');
    }

    public function sobreNos()
    {
        return view ('sobreNos');
    }

    public function alimentos()
    {
        return view ('alimentos');
    }
}
