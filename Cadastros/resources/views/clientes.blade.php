@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header " style="display: flex;justify-content: space-between;"><h4>{{ __('Clientes') }} </h4><a href="/criar_cliente" class="btn btn-success">Cadastrar novo cliente</a></div> 
                <div class="container">
                    <div class="row " style="justify-content: center;justify-content: space-around;">
                        @if(count($clientes) >= 1)
                            @foreach($clientes as $cliente)
                                <div class="card" style="width: 18rem; margin: 10px;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $cliente->name}}</h5>
                                        <p class="card-text">Email: {{ $cliente->email }}</p>
                                        <p class="card-text">Telefone: {{ $cliente->telefone }}</p>
                                        <p class="card-text">Nome da empresa: {{ $cliente->nome_empresa }}</p>
                                        <p class="card-text">Servicos: {{ $cliente->servico }}</p>
                                        <div style="display: grid;">
                                            <a href="/home" class="card-link btn btn-primary">Voltar a home</a></br>
                                            <a href="/clientes/cliente" class="card-link btn btn-info">Detalhes cliente</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <h6>Não há clientes cadastrados</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
