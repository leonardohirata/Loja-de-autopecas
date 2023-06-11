<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ContatoController;



//php artisan serve

Route::get('/', function () {
    return view('homehome');
});

Route::get('/quemsomos', function() {
    return view('quemsomos' );
});
        
Route::group(['prefix' => 'produto'], function() {
    
    Route::get('/', [ProdutoController::class, 'index'])->middleware('auth');
    Route::get('/novo_produto',
                [ProdutoController::class, 'novo_produto']
              );
    Route::post('salvar_novo',
                [ProdutoController::class, 'salvar_novo']
                );
    Route::get('/excluir/{id}',
                [ProdutoController::class, 'excluir']
            );
    Route::get('/editar/{id}',
            [ProdutoController::class, 'editar']
        );   
    Route::post('salvar_alteracao',
            [ProdutoController::class, 'salvar_alteracao']
        );
        
    Route::get('/pesquisa',
            [ProdutoController::class, 'pesquisa']
            );
});

    Route::group(['prefix' => 'cliente'], function(){
        Route::get('/', [ClienteController::class, 'index'])->middleware('auth');
        Route::get('/novo_cliente',
                [ClienteController::class, 'novo_cliente']
              );
        Route::post('salvar_novo',
                [ClienteController::class, 'salvar_novo']
                );
        Route::get('/excluir/{id}',
                [ClienteController::class, 'excluir']
            );
        Route::get('/editar/{id}',
            [ClienteController::class, 'editar']
        );   
        Route::post('/salvar_alteracao',
            [ClienteController::class, 'salvar_alteracao']
        );
        
        Route::get('/pesquisa',
            [ClienteController::class, 'pesquisa']
            );
    });

    Route::group(['prefix' => 'comentario'], function(){
        Route::get('/', [ComentarioController::class, 'index'])->middleware('auth');
        Route::get('/novo_comentario',
                [ComentarioController::class, 'novo_comentario']
              );
        Route::post('salvar_novo',
                [ComentarioController::class, 'salvar_novo']
                );
        Route::get('/excluir/{id}',
                [ComentarioController::class, 'excluir']
            );
        Route::get('/editar/{id}',
            [ComentarioController::class, 'editar']
        );   
        Route::post('/salvar_alteracao',
            [ComentarioController::class, 'salvar_alteracao']
        );
        
        Route::get('/pesquisa',
            [ComentarioController::class, 'pesquisa']
            );
    });



    Route::group(['prefix' => 'site'], function() {
        Route::get('/', [SiteController::class, 'index']);
        Route::get('/index', [SiteController::class, 'index']);
        Route::get('/comentario', [SiteController::class, 'comentario']);
        Route::get('/cliente', [SiteController::class, 'cliente']);
        Route::get('/novo_contato',
        [ContatoController::class, 'novo_contato']);

    });

    Route::group(['prefix' => 'contato'], function(){
        Route::get('/', [ContatoController::class, 'index'])->middleware('auth');
        Route::get('/excluir/{id}',
        [ContatoController::class, 'excluir']);
        Route::post('salvar_novo',
        [ContatoController::class, 'salvar_novo']  );
    
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

