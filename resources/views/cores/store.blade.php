<h1>Cadastro de Cores</h1>
<hr>

<form action="{{route('cores.store')}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Descrição da Cor</label>
        <input type="text" name="descricao" value="{{old('descricao')}}">
        @if($errors->has('descricao'))
          {{$errors->first('descricao')}}
            @endif
    </p>

    <input type="submit" value="Cadastrar">
</form>