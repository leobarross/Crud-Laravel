<?php

namespace App\Http\Controllers\Admin;

use App\Cor;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorRequest;

class CorController extends Controller
{
    public function index()
    {
        $cores = Cor::all();
        return view('cores.index', compact('cores'));
    }

    public function new()
    {
        return view('cores.store');
    }

    public function store(CorRequest $request)
    {
        $corData = $request->all();

        $request->validated();

        $cor = new Cor;
        $cor->create($corData);

        print 'Cor Cadastrada com sucesso!';
    }

    public function edit(Cor $cor)
    {
        return view('cores.edit', compact('cor'));
    }

    public function update(CorRequest $request, $codigo)
    {
        $corData = $request->all();

        $request->validated();

        $cor = Cor::findOrFail($codigo);
        $cor->update($corData);

        print 'Cor Atualizada com sucesso!';
    }

    public function delete($codigo)
    {
    
        $cor = Cor::findOrFail($codigo);
        $cor->delete();

        print 'Cor Removida com sucesso!';
    }
}
