@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editando cliente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="name" placeholder="(99) 9.9999-9999" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="empresa" class="col-md-4 col-form-label text-md-end">{{ __('Nome da empresa') }}</label>

                            <div class="col-md-6">
                                <input id="nome_empresa" type="text" class="form-control @error('nome_empresa') is-invalid @enderror" name="nome_empresa" value="{{ old('nome_empresa') }}" required autocomplete="name"autofocus>
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <label for="servicos" class="col-md-4 col-form-label text-md-end">{{ __('Serviços') }}</label>
                            <div class="col-md-6">
                            <input class="form-check-input" type="checkbox" id="servicos" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">&nbsp Social Media</label></br>
                            <input class="form-check-input" type="checkbox" id="servicos" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">&nbsp CRM</label></br>
                            <input class="form-check-input" type="checkbox" id="servicos" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">&nbsp Mídia</label></br>
                            <input class="form-check-input" type="checkbox" id="servicos" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">&nbsp SEO</label></br>
                            </div>
                        </div>  -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        <a href="/clientes" class="card-link">Voltar para clientes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
