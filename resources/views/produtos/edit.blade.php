@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edição de Produtos</h1>
    <hr>

    <form action="{{route('produtos.update', ['cor' => $produtos->codigo])}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Descrição do Produto</label>
            <input type="text" name="descricao" value="{{$produtos->descricao}}" class="form-control @if($errors->has('descricao')) is-invalid @endif">
            @if($errors->has('descricao'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('descricao')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Resumo</label>
            <input type="text" name="resumo" value="{{$produtos->resumo}}" class="form-control @if($errors->has('resumo')) is-invalid @endif">
            @if($errors->has('resumo'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('resumo')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Preço de Venda</label>
            <input type="text" name="preco" value="{{$produtos->preco}}" class="form-control @if($errors->has('preco')) is-invalid @endif">
            @if($errors->has('preco'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('preco')}}</strong>
            </span>
            @endif
        </p>
        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection