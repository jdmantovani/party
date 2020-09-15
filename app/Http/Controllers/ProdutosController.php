<?php

namespace App\Http\Controllers;

use App\ImagemProduto;
use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produto;


class ProdutosController extends Controller
{
    //
    public function exibirProduto()
        {
            $produtos = Produtos::all();
            return view('teste', compact('produtos'));
        }

    public function create()
    {
        return view('adminProdutos.create');


    }

    public function store(Request $request)
    {

        $produto = new Produtos;

        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');

        if ($request->file('imagem')) {
            $imagePath = $request->file('imagem');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('imagem')->storeAs('uploads', $imageName, 'public');
            $produto->url = '/storage/'.$path;
        }

        $produto->save();

        // $imagemProduto = new ImagemProduto();
        // $imagemProduto->produto_id=$produto->id;
        // $imagemProduto->save();



        return redirect('produtos');

    }





}
