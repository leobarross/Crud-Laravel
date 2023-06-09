<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view ('categorias.index', compact('categorias'));
    }

    public function new()
    {
        return view('categorias.store');
    }

    public function store(CategoriaRequest $request)
    {
        $CategoriaData = $request->all();

        $request->validated();

        $Categoria = new Categoria;
        $Categoria->create($CategoriaData);

        flash('Categoria cadastrada com sucesso')->success();
        return redirect()->route('categorias.index');
    }

    public function edit(Categoria $Categoria)
    {
        return view('categorias.edit', compact('Categoria'));
    }

    public function update(CategoriaRequest $request, $codigo)
    {
        $CategoriaData = $request->all();

        $request->validated();

        $Categoria = Categoria::findOrFail($codigo);
        $Categoria->update($CategoriaData);

        flash('Categoria Atualizada com sucesso')->success();
        return redirect()->route('categorias.edit', ['Categoria' => $codigo]);
    }

    public function delete($codigo)
    {
    
        $Categoria = Categoria::findOrFail($codigo);
        $Categoria->delete();

        flash('Categoria Removida com sucesso')->success();
        return redirect()->route('categorias.index');
    }
}
