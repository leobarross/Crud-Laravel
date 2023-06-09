@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('produtos.new')}}" class="float-right btn btn-success">Incluir</a>
    <h1 class="float-left">Produtos</h1>
    <table class="table table-stiped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Resumo</th>
                <th>Preço</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $p)
            <tr>
                <td>{{$p->produtos}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->resumo}}</td>
                <td>{{$p->preco}}</td>
                <td>{{$p->created_at}}</td>
                <td>
                    <a href="{{route('produtos.edit', ['cor' => $p->produtos])}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('produtos.delete', ['produtos' => $p->produtos])}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection