@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>{{$codigo->descricao}}</h2>
            <p>{{$codigo->resumo}}</p>
            <hr>
        </div>
        <div class="col-12">
            Cor:
            <ul class="list-group">
                <li class="list-group-item">
                {{$codigo->cores->descricao}} <br>
                R$:{{number_format($codigo->preco, '2',',', '.')}}
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection