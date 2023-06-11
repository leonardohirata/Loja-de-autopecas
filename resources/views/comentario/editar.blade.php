@extends('layouts.main')

@section('title','Alteração de Comentario')

@section('content')


<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Alterar um comentario</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/comentario/salvar_alteracao" method="post">
    <input type="hidden" name="id" value="{{ $comentario['id'] }}" />
    <div class="card-body">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Everton"
                    name="nome"
                    value='{{ $comentario["nome"] }}'
                >
        </div>
        <div class="form-group">
            <label>Imagem</label>
            <input type="text" 
                    class="form-control" 
                    placeholder=""
                    name="imagem"
                    value='{{ $comentario["imagem"] }}'
                >
    </div>
         <div class="form-group">
            <label>Comentario</label>
            <input type="text" 
                    class="form-control" 
                    placeholder=""
                    name="comentario"
                    value='{{ $comentario["comentario"] }}'
                >
    </div>
    
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
            Salvar
        </button>
        <a href='/comentario' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection