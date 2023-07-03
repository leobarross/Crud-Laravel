@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('cores.new')}}" class="float-right btn btn-success">Incluir</a>
    <h1 class="float-left">Cores</h1>
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
            @foreach($cores as $c)
            <tr>
                <td>{{$c->codigo}}</td>
                <td>{{$c->descricao}}</td>
                <td>{{$c->created_at->format('d/m/y H:i:s')}}</td>
                <td>
                    <a href="{{route('cores.edit', ['cor' => $c->codigo])}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('cores.delete', ['codigo' => $c->codigo])}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection