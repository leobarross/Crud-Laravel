@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('user.new')}}" class="float-right btn btn-success">Incluir</a>   
<h1 class="float-left">Usuários</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Criado Em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->created_at->format('d/m/y H:i:s')}}</td>
                <td>
                    <a href="{{route('user.edit', ['user' => $u->id])}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('user.remove', ['id' => $u->id])}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection