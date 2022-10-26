@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Clientes') }} </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nome </h5>
                        <p class="card-text">Email</p>
                        <p class="card-text">Telefone</p>
                        <p class="card-text">empresa</p>
                        <p class="card-text">Serviços</p>
                        <a href="/home" class="card-link">Voltar a home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection