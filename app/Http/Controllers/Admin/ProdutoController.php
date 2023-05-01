<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        return __CLASS__;
    }

    public function new()
    {
        return view('produtos.store');
    }
}
