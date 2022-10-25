@extends('app')
@section('titulo', 'Novo de cliente')
@section('conteudo')
<h1>Novo Cliente</h1>

<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" required>
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço" required>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Observacao</label>
        <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Informe a observação" required></textarea>
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>

</form>
@endsection