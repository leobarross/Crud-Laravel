<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Foto_Produto;

class ProdutoFotoController extends Controller
{
    public function index($codigo)
    {
        $codproduto = $codigo;
        return view('fotos.index', compact('codproduto'));
    }

    public function save(Request $request, $codigo)
    {
        foreach ($request->file('fotos') as $foto) {
            $newName = sha1($foto->getClientOriginalName()) . uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('images'), $newName);
            $produtos = Produto::find($codigo);
            $produtos->fotos()->create([
                'foto' => $newName
            ]);

            flash()->success('Upload de Fotos Realizado com Sucesso!');
            return redirect()->route('produtos.fotos', ['codigo' => $codigo]);
        }
    }
}
