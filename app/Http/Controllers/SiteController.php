<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Produto;
use App\Models\Comentario;
use App\Models\Cliente;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->toArray();
        
        return view('venda.index',
                    [ 'lista' => $produtos ]
                    );
    }
    
    public function comentario()
    {
        $comentarios = Comentario::all()->toArray();
        
        return view('venda.comentario',
                    [ 'lista' => $comentarios ]
                    );
    }

    public function cliente()
    {
        $clientes = Cliente::all()->toArray();
        
        return view('venda.cliente',
                    [ 'lista' => $clientes ]
                    );
    }
};
