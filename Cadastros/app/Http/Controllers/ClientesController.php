<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with('servicos')->orderBy('id','desc')->get();
        
        return view('listar_clientes', ['clientes'=>$clientes]);
    }

    public function create()
    {
        return view('criar_cliente');
    }

    public function store(Request $request) 
    {
        $cliente = new Cliente;

        $cliente->name = $request->get('name');
        $cliente->email = $request->get('email');
        $cliente->telefone = $request->get('telefone');
        $cliente->nome_empresa = $request->get('nome_empresa');
        $cliente->save();

        $servicos = $request->get('servicos');

        if (!is_null($servicos) && count($servicos) > 0) {
            foreach ($servicos as $servico) {
                $clienteServico = new Servicos;
                $clienteServico->cliente_id = $cliente->id;
                $clienteServico->servico = $servico;
                $clienteServico->save();
            }
        }

        return redirect()->route('listar_clientes')->with('mensagem',"O cliente {$cliente->name} foi criado com sucesso.");


    }

    

    public function edit($id)
    {
        $cliente = Cliente::with('servicos')->find($id);

        $servicos = [];
        foreach ($cliente->servicos->toArray() as $servico) {
            array_push($servicos, $servico['servico']);
        }


        return view('editar_cliente', [
            'cliente'=>$cliente, 
            'servicos'=>$servicos
        ]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->name = $request->get('name');
        $cliente->email = $request->get('email');
        $cliente->telefone = $request->get('telefone');
        $cliente->telefone = $request->get('nome_empresa');
        $cliente->save();

        Servicos::where('cliente_id', $id)->delete();

        $servicos = $request->get('servicos');
        if (!is_null($servicos) && count($servicos) > 0) {
            foreach ($servicos as $servico) {
                $clienteServico = new Servicos;
                $clienteServico->cliente_id = $cliente->id;
                $clienteServico->servico = $servico;
                $clienteServico->save();
            }
        }

        return redirect()->route('listar_clientes')->with('mensagem',"O cliente {$cliente->name} foi atualizado com sucesso.");

        
    }

    public function delete( $id)
    {
        $cliente = Cliente::find($id);
        
        Servicos::where('cliente_id', $id)->delete();

        if($cliente->delete()) {
            return redirect()->route('listar_clientes')->with('mensagem',"O cliente {$cliente->name} foi excluido com sucesso.");

        }
        
    }
}
