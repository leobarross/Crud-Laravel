<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use App\Cor;
use App\Produto;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function new()
    {
        $cores = Cor::all(['codigo', 'descricao']);
        $categorias = Categoria::all(['codigo', 'descricao']);
        return view('produtos.store', compact('categorias', 'cores'));
    }

    public function store(ProdutoRequest $request)
    {
        $produtoData = $request->all();

        $request->validated();

        $produto = new Produto;
        $produto->create($produtoData);

        flash('Produto cadastrado com sucesso')->success();
        return redirect()->route('produtos.index');
    }

    public function edit(Produto $produto)
    {
        $cores = Cor::all(['codigo', 'descricao']);
        $categorias = Categoria::all(['codigo', 'descricao']);
        return view('produtos.edit', compact('produto', 'categorias', 'cores'));
    }

    public function update(ProdutoRequest $request, $codigo)
    {
        $produtoData = $request->all();

        $request->validated();

        $produto = Produto::findOrFail($codigo);
        $produto->update($produtoData);

        flash('Produto Atualizado com sucesso')->success();
        return redirect()->route('produtos.edit', ['produto' => $codigo]);
    }

    public function delete($codigo)
    {

        $produto = Produto::findOrFail($codigo);
        $produto->delete();

        flash('Produto Removido com sucesso')->success();
        return redirect()->route('produtos.index');
    }
}
