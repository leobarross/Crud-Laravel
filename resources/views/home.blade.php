@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produtos </h1>
    <div class="row">
        @foreach($produtos as $p)
        <div class="col-4">
          <h2>{{$p->descricao}}</h2>
          <p>
            {{$p->resumo}}
          </p>
        </div>
        @endforeach
    </div>
    {{$produtos->links()}}
</div>
@endsection