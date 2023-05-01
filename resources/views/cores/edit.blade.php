<h1>Edição de Cores</h1>
<hr>

<form action="{{route('cores.update', ['cor' => $cor->codigo])}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Descrição da Cor</label>
        <input type="text" name="descricao" value="{{$cor->descricao}}">
        @if($errors->has('descricao'))
          {{$errors->first('descricao')}}
            @endif
    </p>

    <input type="submit" value="Atualizar">
</form>