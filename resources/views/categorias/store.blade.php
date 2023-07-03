@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inserção de Categoria</h1>
    <hr>

    <form action="{{route('categorias.store')}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Descrição da Categoria</label>
            <input type="text" name="descricao" value="{{old('descricao')}}" class="form-control @if($errors->has('descricao')) is-invalid @endif">
            @if($errors->has('descricao'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('descricao')}}</strong>
            </span>
            @endif
        </p>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
        <a href="{{route('categorias.index')}}" class="btn btn-secondary btn-lg">Voltar</a>

    </form>
</div>
@endsection