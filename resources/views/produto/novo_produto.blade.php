@extends('layouts.main')

@section('title','Cadastro de produto')

@section('content')

<div>
          <h1><i class="fa fa-dashboard"></i> Cadastro de novo produto</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="./">Página Inicial</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Insira os dados do produto
            </div>
      </div>
      <div class="form-group">
    <form action="/produto/salvar_novo" method="post">
        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Paralama hb20"
                    name="nome"
            >
        </div>
        <div class="form-group">
            <label>Preço de venda</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="50.00"
                    name="preco"
            >
        </div>
        
        <div class="form-group">
            <label>Quantidade no estoque</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="50.00"
                    name="estoque"
            >
        </div>       
        
        <div class="form-group">
            <label>Peso</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="50.00"
                    name="peso"
            >
        </div> 
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Paralama especial hb20"
                    name="descricao"
            >
        <div class="form-group">
            <label>Imagem</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Link da imagem"
                    name="imagem"
            >
        <div class="form-group">
            <label>Imagem 2</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Link da imagem"
                    name="imagemum"
            >
        <div class="form-group">
            <label>Imagem 3</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Link da imagem"
                    name="imagemdois"
            >
                

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