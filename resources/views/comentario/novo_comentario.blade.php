@extends('layouts.main')

@section('title','Cadastro de Comentario')

@section('content')


<div>
          <h1><i class="fa fa-dashboard"></i> Cadastro de novo comentario</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="./">Página Inicial</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Insira os dados do comentario
            </div>
      </div>
      <div class="form-group">
    <form action="/comentario/salvar_novo" method="post">
        <div class="form-group">
            <label>Nome do cliente</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Everton"
                    name="nome"
                >
        </div>
        <div class="form-group">
            <label>Imagem</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Link da imagem"
                    name="imagem"
            >
        </div>
        <div class="form-group">
            <label>Comentario</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Comentario"
                    name="comentario"
                >
        </div>
                
    </div>
    <!-- /.card-body -->

    <div class="tile-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
            Salvar
        </button>
        <a href='/produto' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection