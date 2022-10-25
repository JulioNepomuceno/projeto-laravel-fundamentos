@extends('app')
@section('titulo', 'Editar de cliente')
@section('conteudo')
<h1>Editar Cliente</h1>

<form action="{{route('clients.update', $client)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$client->nome}}" placeholder="Informe o nome" required>
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="{{$client->endereco}}" placeholder="Informe o endereço" required>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Observacao</label>
        <textarea type="text" class="form-control" id="observacao" name="observacao"  placeholder="Informe a observação" required>{{$client->observacao}}</textarea>
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>

</form>
@endsection