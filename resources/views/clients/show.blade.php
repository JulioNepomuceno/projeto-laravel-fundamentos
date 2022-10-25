@extends('app')
@section('titulo', 'Detalhes do Cliente')
@section('conteudo')
        <div class="card">
            <div class="card-header">
                Detalhes do Cliente {{$client->nome}}
            </div>
            <div class="card-body">
                <p class="card-text">ID: <strong>{{$client->id}}</strong></p>
                <p class="card-text">Nome: <strong>{{$client->nome}}</strong></p>
                <p class="card-text">Endereço: <strong>{{$client->endereco}}</strong></p>
                <p class="card-text">Observação: <strong>{{$client->observacao}}</strong></p>

                <a href="{{route('clients.index')}}" class="btn btn-primary">Voltar para lista</a>
            </div>
        </div>
    </div>
@endsection