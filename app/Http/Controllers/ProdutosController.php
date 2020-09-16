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
    public function show($id)
    {   
    $produto = Produtos::find($id);
    return view('produtoIndividual', compact('produto'));
    }

    public function create()
    {
        return view('adminProdutos.create');


    }

    public function index()
    {
        $produtos = Produtos::all();
        return view('adminProdutos.produtos', compact('produtos'));
    }

    public function edit($id)
    {
        $produto = Produtos::find($id);
        return view('adminProdutos.edit', compact('produto'));
    }
    
    public function destroy($id)
    {
        Produtos::where("id", $id)->delete();
        return back();
    }

    public function update($id,Request $request)
    {
        $produto = Produtos::find($id);

        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');

        if ($request->file('imagem') && $request->imagem->isValid()) {
            $imagePath = $request->file('imagem');
            $imageName = $imagePath->getClientOriginalName();
            $imageExt = $imagePath->getClientOriginalExtension();
            $imageFinal = $imageName.date("Y-m-d-H-i-s").".".$imageExt;
            $path = $request->file('imagem')->storeAs('uploads', $imageFinal, 'public');
            $produto->url = '/storage/'.$path;
        }

        $produto->save();

        // $imagemProduto = new ImagemProduto();
        // $imagemProduto->produto_id=$produto->id;
        // $imagemProduto->save();



        return redirect('produtos');

    }

    public function store(Request $request)
    {

        $produto = new Produtos;

        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');

        if ($request->file('imagem') && $request->imagem->isValid()) {
            $imagePath = $request->file('imagem');
            $imageName = $imagePath->getClientOriginalName();
            $imageExt = $imagePath->getClientOriginalExtension();
            $imageFinal = $imageName.date("Y-m-d-H-i-s").".".$imageExt;
            $path = $request->file('imagem')->storeAs('uploads', $imageFinal, 'public');
            $produto->url = '/storage/'.$path;
        }

        $produto->save();

        // $imagemProduto = new ImagemProduto();
        // $imagemProduto->produto_id=$produto->id;
        // $imagemProduto->save();



        return redirect('produtos');

    }





}
