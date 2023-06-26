@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produtos </h1>
    <hr>
    <div class="row">
        @foreach($produtos as $p)
        <div class="col-4">
          <h2>
            <a href="{{route('home.single',['codigo' => $p->codigo])}}">{{$p->descricao}}</a>
          </h2>
          <p>
            {{$p->resumo}}
          </p>
        </div>
        @endforeach
    </div>
    {{$produtos->links()}}
</div>
@endsection