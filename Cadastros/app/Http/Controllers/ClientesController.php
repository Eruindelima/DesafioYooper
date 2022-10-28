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

    // public function details($id) 
    // {
    //     $details = Cliente::query()
    //     ->select('cliente.*', 'servicos.servico')
    //     ->join('servicos', 'servicos.cliente_id', '=', 'cliente.id')
    //     ->get();

    //     return view('/clientes/cliente', ['clientes'=>$clientes]);
    // }

    public function create()
    {
        return view('criar_cliente');
    }

    public function edit()
    {
        return view('editar_cliente');
    }

    public function destroy()
    {
        
    }
}
