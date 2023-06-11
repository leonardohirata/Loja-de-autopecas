@extends('layouts.main')

@section('title','Alteração de cliente')

@section('content')


<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Alterar um cliente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/cliente/salvar_alteracao" method="post">
    <input type="hidden" name="id" value="{{ $cliente['id'] }}" />
    <div class="card-body">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Everton"
                    name="nome"
                    value='{{ $cliente["nome"] }}'
                >
        </div>
        <div class="form-group">
            <label>Endereco</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Av. Duque de caxias,11"
                    name="endereco"
                    value='{{ $cliente["endereco"] }}'
                >
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="14996981166"
                    name="telefone"
                    value='{{ $cliente["telefone"] }}'
                >
        <div class="form-group">
            <label>CPF</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="999999999"
                    name="cpf"
                    value='{{ $cliente["cpf"] }}'
                >
        <div class="form-group">
            <label>RG</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="9999999"
                    name="rg"
                    value='{{ $cliente["rg"] }}'
                >
        <div class="form-group">
            <label>Data Nascimento</label>
            <input type="date" 
                    class="form-control" 
                    placeholder="data"
                    name="datanas"
                    value='{{ $cliente["datanas"] }}'
                >
        </div>
        <div class="form-group">
            <label>Imagem</label>
            <input type="text" 
                    class="form-control" 
                    placeholder=""
                    name="imagem"
                    value='{{ $cliente["imagem"] }}'
                >
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>
            Salvar
        </button>
        <a href='/cliente' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection