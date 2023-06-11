<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all()->toArray();
        
        return view('cliente.index',
                    [ 'lista' => $clientes ]
                    );
    }

    public function novo_cliente() 
    {
        return view('cliente.novo_cliente');
    }

    public function salvar_novo(Request $dados)
    {
        $cliente = new Cliente;
        $cliente ->nome = $dados->input("nome");
        $cliente->cpf = $dados->input("cpf");
        $cliente->endereco = $dados->input("endereco");
        $cliente->telefone = $dados->input("telefone");
        $cliente->rg = $dados->input("rg");
        $cliente->datanas = $dados->input("datanas");
        $cliente->imagem = $dados->input("imagem");
        $cliente->save();

        return redirect('/cliente');
    }

    public function excluir($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/cliente');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id)->toArray();
        return view('cliente.editar',
                [ 'cliente' => $cliente ]        
            );
    }

    public function salvar_alteracao(Request $request)
    {
        $id = $request->input("id");

        $cliente = Cliente::find($id);
        $cliente ->nome = $request->input("nome");
        $cliente->cpf = $request->input("cpf");
        $cliente->endereco = $request->input("endereco");
        $cliente->telefone = $request->input("telefone");
        $cliente->rg = $request->input("rg");
        $cliente->datanas = $request->input("datanas");
        $cliente->imagem = $request->input("imagem");
        $cliente->save();

        return redirect('cliente');
    }


    public function pesquisa(Request $request)
    {
        $cpf =  $request->input("cpf");

        $clientes = Cliente::query()
                    ->where('nome', 'LIKE', "%{$cpf}%")
                    ->get();

        return view('cliente',
                    [ 'lista' => $clientes ]
                    );
    }
    
}
