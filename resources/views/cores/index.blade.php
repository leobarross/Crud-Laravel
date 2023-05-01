<h1>Cores</h1>
<a href="{{route('cores.new')}}">Incluir</a>
<table>
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
            <td>{{$c->created_at}}</td>
            <td>
                <a href="{{route('cores.edit', ['cor' => $c->codigo])}}">Editar</a>
                <a href="{{route('cores.delete', ['codigo' => $c->codigo])}}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>