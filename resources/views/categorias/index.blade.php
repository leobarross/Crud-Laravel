@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('categorias.new')}}" class="float-right btn btn-success">Incluir</a>
    <h1 class="float-left">Categoria</h1>
    <table class="table table-stiped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $c)
            <tr>
                <td>{{$c->codigo}}</td>
                <td>{{$c->descricao}}</td>
                <td>{{$c->created_at}}</td>
                <td>
                    <a href="{{route('categorias.edit', ['cor' => $c->codigo])}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('categorias.delete', ['codigo' => $c->codigo])}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection