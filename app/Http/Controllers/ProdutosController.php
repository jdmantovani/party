<?php

namespace App\Http\Controllers;

use App\ImagemProduto;
use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produto;
use Gate;

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
        if(Gate::denies("admin")){
            return redirect()->route("home");
        }
        return view('adminProdutos.create');

    }

    public function index()
    {
        if(Gate::denies("admin")){
            return redirect()->route("home");
        }
        $produtos = Produtos::all();
        return view('adminProdutos.produtos', compact('produtos'));
    }

    public function edit($id)
    {
        if(Gate::denies("admin")){
            return redirect()->route("home");
        }
        $produto = Produtos::find($id);
        return view('adminProdutos.edit', compact('produto'));
    }
    
    public function destroy($id)
    {
        if(Gate::denies("admin")){
            return redirect()->route("home");
        }
        Produtos::where("id", $id)->delete();
        return back();
    }

    public function update($id,Request $request)
    {
        if(Gate::denies("admin")){
            return redirect()->route("home");
        }
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
        if(Gate::denies("admin")){
            return redirect()->route("home");
        }
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
