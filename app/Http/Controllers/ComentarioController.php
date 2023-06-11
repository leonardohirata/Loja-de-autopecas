<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    
    public function index()
    {
        $comentarios = Comentario::all()->toArray();
        
        return view('comentario.index',
                    [ 'lista' => $comentarios ]
                    );
    }

    public function novo_comentario() 
    {
        return view('comentario.novo_comentario');
    }

    public function salvar_novo(Request $dados)
    {
        $comentario = new Comentario;
        $comentario->nome = $dados->input("nome");
        $comentario->imagem = $dados->input("imagem");
        $comentario->comentario = $dados->input('comentario');
        $comentario->save();

        return redirect('/comentario');
    }

    public function excluir($id)
    {
        $comentario = Comentario::find($id);
        $comentario->delete();
        return redirect('/comentario');
    }

    public function editar($id)
    {
        $comentario = Comentario::find($id)->toArray();
        return view('comentario.editar',
                [ 'comentario' => $comentario ]        
            );
    }

    public function salvar_alteracao(Request $request)
    {
        $id = $request->input("id");

        $comentario = Comentario::find($id);
        $comentario ->nome = $request->input("nome");
        $comentario ->imagem = $request->input("imagem");
        $comentario ->comentario = $request->input("comentario");
        $comentario->save();

        return redirect('comentario');
    }


    public function pesquisa(Request $request)
    {
        $nome =  $request->input("nome");

        $comentarios = Comentario::query()
                    ->where('nome', 'LIKE', "%{$nome}%")
                    ->get();

        return view('comentario',
                    [ 'lista' => $comentarios ]
                    );
    }
    
}
