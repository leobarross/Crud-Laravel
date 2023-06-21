@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edição de Produtos</h1>
    <hr>

    <form action="{{route('produtos.update', ['produto' => $produto->codigo])}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" value="{{$produto->descricao}}" class="form-control @if($errors->has('descricao')) is-invalid @endif">
            @if($errors->has('descricao'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('descricao')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Resumo</label>
            <input type="text" name="resumo" value="{{$produto->resumo}}" class="form-control @if($errors->has('resumo')) is-invalid @endif">
            @if($errors->has('resumo'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('resumo')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Descrição</label>
            <input type="text" name="preco" value="{{$produto->preco}}" class="form-control @if($errors->has('preco')) is-invalid @endif">
            @if($errors->has('preco'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('preco')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Cores</label>
            <select name="cod_cor" class="form-control">
                @foreach($cores as $cor)
                      <option value="{{$cor->codigo}}"
                        @if($produto->cod_cor == $cor->codigo)
                           selected
                         @endif
                      >{{$cor->descricao}}</option>
                @endforeach
            </select>
            
            @if($errors->has('cod_cor'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('cod_cor')}}</strong>
            </span>
            @endif 
        </p>

        <p class="form-group">
            <label>Categorias</label>
            <select name="cod_categoria" class="form-control">
                @foreach($categorias as $cat)
                      <option value="{{$cat->codigo}}"
                        @if($produto->cod_categoria == $cat->codigo)
                           selected
                        @endif
                      >{{$cat->descricao}}</option>
                @endforeach
            </select>

            @if($errors->has('cod_categoria'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('cod_categoria')}}</strong>
            </span>
            @endif 
        </p>
        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection