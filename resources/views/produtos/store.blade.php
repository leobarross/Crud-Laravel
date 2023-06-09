@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastro de Produtos</h1>
    <hr>

    <form action="{{route('produtos.store')}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Descrição</label> <br>
            <input type="text" name="descricao" value="{{old('descricao')}}" class="form-control @if($errors->has('descricao')) is-invalid @endif">
            @if($errors->has('descricao'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('descricao')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Resumo</label> <br>
            <textarea name="resumo" id="" cols="50" rows="5">{{old('resumo')}}</textarea> <br>
            @if($errors->has('resumo'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('resumo')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Preço</label> <br>
            <input type="text" name="preco" value="{{old('preco')}}" class="col-sm-4 col-form-label @if($errors->has('preco')) is-invalid @endif">
            @if($errors->has('preco'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('preco')}}</strong>
            </span>
            @endif
        </p>

        
        <p class="form-group">
            <label>Cor</label>
            <select name="cod_cor" class="form-control">
                <option value="">Selecione uma cor</option>
                @foreach($cores as $cor)
                      <option value="{{$cor->codigo}}">{{$cor->descricao}}</option>
                @endforeach
            </select>
            
            @if($errors->has('cod_cor'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('cod_cor')}}</strong>
            </span>
            @endif
        </p>

        <p class="form-group">
            <label>Categoria</label>
            <select name="cod_categoria" class="form-control">
                <option value="">Selecione uma categoria</option>
                @foreach($categorias as $cat)
                      <option value="{{$cat->codigo}}">{{$cat->descricao}}</option>
                @endforeach
            </select>

            @if($errors->has('cod_categoria'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('cod_categoria')}}</strong>
            </span>
            @endif
        </p>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
        <a href="{{route('produtos.index')}}" class="btn btn-secondary btn-lg">Voltar</a>

    </form>
</div>
@endsection