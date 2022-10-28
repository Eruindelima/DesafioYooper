@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Olá!! deseja ver todos os contratos ? clique no botão abaixo') }}</br>
                    <a href="/clientes">Ver todos contratos</a></br>
                    {{ __('Caso queira cadastrar um novo cliente clique no botão abaixo') }}</br>
                    <a href="/criar_cliente">Cadastrar novo cliente</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
