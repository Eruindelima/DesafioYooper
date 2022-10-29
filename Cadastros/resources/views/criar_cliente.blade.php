@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style="display: flex;justify-content: space-between;">
                    <h4>{{ __('Cadastrar Novo Cliente') }} </h4>
                </div>
                <div class="container">
                    <form method="POST" action="{{route('salvar_cliente')}}">
                        @csrf

                        <div class="form-group my-3">
                            <label for="inputName">Nome</label>
                            <input type="text" id="inputName" name="name" class="form-control" value="{{!empty($cliente->name) ? $cliente->name : old('name')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputEmail">E-mail</label>
                            <input type="text" id="inputEmail" name="email" class="form-control" value="{{!empty($cliente->email) ? $cliente->email : old('email')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputTelefone">Telefone</label>
                            <input type="text" id="inputTelefone" name="telefone" class="form-control" value="{{!empty($cliente->telefone) ? $cliente->telefone : old('telefone')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNomeEmpresa">Nome da Empresa</label>
                            <input type="text" id="inputNomeEmpresa" name="nome_empresa" class="form-control" value="{{!empty($cliente->nome_empresa) ? $cliente->nome_empresa : old('nome_empresa')}}">
                        </div>

                        <div class="service-checkbox-list">
                            <div class="form-group mb-3">
                                <label for="inputSocialMedia">Social Media</label>
                                <input type="checkbox" id="inputSocialMedia" name="servicos[]" value="Social Media" />
                            </div>

                            <div class="form-group mb-3 mx-4">
                                <label for="inputCRM">CRM</label>
                                <input type="checkbox" id="inputCRM" name="servicos[]" value="CRM" />
                            </div>

                            <div class="form-group mb-3 mx-2">
                                <label for="inputMidia">Mídia</label>
                                <input type="checkbox" id="inputMidia" name="servicos[]" value="Mídia" />
                            </div>

                            <div class="form-group mb-3 mx-2">
                                <label for="inputSEO">SEO</label>
                                <input type="checkbox" id="inputSEO" name="servicos[]" value="SEO" />
                            </div>
                        </div>

                        <div class="form-group my-5">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
