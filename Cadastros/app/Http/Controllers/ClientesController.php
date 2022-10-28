<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::query()
        ->select('cliente.*', 'servicos.servico')
        ->join('servicos', 'servicos.cliente_id', '=', 'cliente.id')
        ->get();
        
        return view('clientes', ['clientes'=>$clientes]);
    }

    public function details() 
    {
    }

    public function create()
    {
        return view('criar_cliente');
    }

    public function edit()
    {
        return view('editar_cliente');
    }

    public function update()
    {
        
    }

    // public function delete($id)
    // {
    //     $cliente = Cliente::find($id);

    //     if($cliente->delete()) {
    //         return redirect()->route('cliente');
    //     }
        
    // }
}
