@extends('layouts.app')

@section('content')
<div class="container">
    < class="row">
        <div class="col-12">
            <h2>{{$codigo->descricao}}</h2>
            <p>{{$codigo->resumo}}</p>
            <hr>
        </div>
        <div class="col-12">
            <ul class="list-group">
                <li class="list-group-item">
                    Cor: {{$codigo->cores->descricao}} <br>
                    Categoria: {{$codigo->categorias->descricao}} <br>
                    R$: {{number_format($codigo->preco, '2',',', '.')}}
                </li>
            </ul>
        </div>
        <div class="col-12">
            <h2>Fotos</h2>
            <hr>
        </div>
        <div class="row">
        @if($codigo->fotos()->count())
                @foreach($codigo->fotos as $foto)
            <div class="col-4">
                <img src="{{asset('/images/' . $foto->foto)}}" alt="" class="img-fluid">
            </div>
                @endforeach
        @else
                <div class="col-12">
                    <span class="alert alert-warning">Sem Fotos para Este Produto</span>
                </div>
            @endif        
        </div>    
    </div>
</div>
@endsection