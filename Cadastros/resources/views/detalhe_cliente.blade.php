@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Detalhes do cliente') }}</div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Nome do Cliente</h6>
                        <p class="card-text">Email</p>
                        <p class="card-text">Telefone</p>
                        <p class="card-text">empresa</p>
                        <p class="card-text">Serviços</p>
                        <a href="/clentes/cliente/editar_cliente" class="card-link">Editar</a>
                        <a href="#" class="card-link">Excluir</a>
                        <a href="/clientes" class="card-link">voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection