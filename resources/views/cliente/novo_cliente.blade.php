@extends('layouts.main')

@section('title','Cadastro de cliente')

@section('content')


<div>
          <h1><i class="fa fa-dashboard"></i> Cadastro de novo cliente</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="./">Página Inicial</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Insira os dados do cliente
            </div>
      </div>
      <div class="form-group">
    <form action="/cliente/salvar_novo" method="post">
        <div class="form-group">
            <label>Nome do cliente</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Everton"
                    name="nome"
                >
        </div>
        <div class="form-group">
            <label>Endereco</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Av. Duque de caxias, 11"
                    name="endereco"
                >
        </div>        
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="14996981166"
                    name="telefone"
                >
        </div>        
        <div class="form-group">
            <label>CPF</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="99999999999"
                    name="cpf"
                >
        </div>        
        <div class="form-group">
            <label>RG</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="999999999999"
                    name="rg"
                >
        </div>        
        <div class="form-group">
            <label>Data de nascimento</label>
            <input type="date" 
                    class="form-control" 
                    placeholder="Data"
                    name="datanas"
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