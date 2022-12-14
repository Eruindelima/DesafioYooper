@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style="display: flex;justify-content: space-between;">
                    <h4>{{ __('Editar Cliente') }} </h4>
                </div>
                <div class="container">
                    <form method="POST" action="{{route('atualizar_cliente', ['id' => $cliente->id])}}">
                        @csrf

                        <div class="form-group my-3">
                            <label for="inputName">Nome</label>
                            <input type="text" id="inputName" name="name" class="form-control" value="{{!empty($cliente->name) ? $cliente->name : old('name')}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputEmail">E-mail</label>
                            <input type="text" id="inputEmail" name="email" class="form-control" value="{{!empty($cliente->email) ? $cliente->email : old('email')}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputTelefone">Telefone</label>
                            <input type="text" id="inputTelefone" name="telefone" class="form-control" value="{{!empty($cliente->telefone) ? $cliente->telefone : old('telefone')}}" required> 
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNomeEmpresa">Nome da Empresa</label>
                            <input type="text" id="inputNomeEmpresa" name="nome_empresa" class="form-control" value="{{!empty($cliente->nome_empresa) ? $cliente->nome_empresa : old('nome_empresa')}}" required>
                        </div>

                        <div class="service-checkbox-list">
                            <div class="form-group mb-3">
                                <label for="inputSocialMedia">Social Media</label>
                                <input type="checkbox" id="inputSocialMedia" name="servicos[]" value="Social Media" {{in_array('Social Media', $servicos) ? 'checked' : ''}}/>
                            </div>

                            <div class="form-group mb-3 mx-4">
                                <label for="inputCRM">CRM</label>
                                <input type="checkbox" id="inputCRM" name="servicos[]" value="CRM" {{in_array('CRM', $servicos) ? 'checked' : ''}} />
                            </div>

                            <div class="form-group mb-3 mx-2">
                                <label for="inputMidia">M??dia</label>
                                <input type="checkbox" id="inputMidia" name="servicos[]" value="M??dia" {{in_array('M??dia', $servicos) ? 'checked' : ''}}/>
                            </div>

                            <div class="form-group mb-3 mx-2">
                                <label for="inputSEO">SEO</label>
                                <input type="checkbox" id="inputSEO" name="servicos[]" value="SEO" {{in_array('SEO', $servicos) ? 'checked' : ''}}/>
                            </div>
                        </div>

                        <div class="form-group my-5">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                            <button class="btn btn-danger" type="button" id="cliente-delete" onclick="deleteCliente()" data-link="{{route('deletar_cliente', ['id' => $cliente->id])}}" data-nome="{{$cliente->name}}">Excluir Cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script>
    function deleteCliente() {
        const clienteBtn = document.querySelector("#cliente-delete");
        const url = clienteBtn.dataset.link;
        const clienteNome = clienteBtn.dataset.nome;

        var ask = window.confirm(`Voc?? tem certeza que quer excluir o cliente ${clienteNome}?`);
    
        if (ask) {
            window.location.href = url;
        }
    }
    </script>