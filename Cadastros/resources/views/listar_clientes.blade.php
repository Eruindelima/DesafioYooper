@extends('layouts.app')
@section('content')
<div class="container">
    @if ($message = Session::get('mensagem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header " style="display: flex;justify-content: space-between;">
                    <h4>{{ __('Clientes') }} </h4>
                    <a href="{{route('criar_cliente')}}" class="btn btn-success">Cadastrar novo cliente</a>
                    <a href="/home" class="card-link btn btn-primary">Voltar a home</a>
                </div> 
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
                                        @if(count($cliente->servicos) >= 1)
                                            <p class="card-text service-list">Servicos:
                                                @foreach($cliente->servicos as $servico)
                                                    <span class="custom-badge">{{$servico->servico}}</span>
                                                @endforeach
                                            </p>
                                        @endif
                                        <div style="display: grid;">
                                            <a href="{{route('editar_cliente', ['id' => $cliente->id])}}" class="card-link btn btn-info">Editar cliente</a>
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
