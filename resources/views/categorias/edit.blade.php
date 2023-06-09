@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edição de categorias</h1>
    <hr>

    <form action="{{route('categorias.update', ['cor' => $cor->codigo])}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Descrição da Categoria</label>
            <input type="text" name="descricao" value="{{$cor->descricao}}" class="form-control @if($errors->has('descricao')) is-invalid @endif">
            @if($errors->has('descricao'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('descricao')}}</strong>
            </span>
            @endif
        </p>
        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection