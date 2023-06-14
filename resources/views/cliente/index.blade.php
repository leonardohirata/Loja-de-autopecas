@extends('layouts.main')

@section('content')


<div>
          <h1><i class="fa fa-dashboard"></i>Cadastro de clientes</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/home">Página Inicial</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="til-body">Cadastro de clientes
        </div>
    <div class="form-group">
        <form method='get' action='/cliente/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="nome"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>
    <div>
        <a href='/cliente/novo_cliente' class='btn btn-success'>
            Novo
        </a> 
    </div>

    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Endereco</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>RG</td>
            <td>Data de nascimento</td>
            <td>Imagem</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['endereco'] . "</td>" .
                            "<td>" .$linha['telefone'] . "</td>" .
                            "<td>" .$linha['cpf'] . "</td>" .
                            "<td>" .$linha['rg'] . "</td>" .
                            "<td>" .$linha['datanas'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Cliente' width='100' height='100'></td>" .
                            "<td>
                                <a href='/cliente/editar/" . $linha['id']. "' class='btn btn-default'>
                                    <i class='fa fa-edit'></i>
                                    <span>Editar</span>
                                </a>

                                <a href='/cliente/excluir/" . $linha['id']. "' class='btn btn-danger'>
                                    <i class='fa fa-trash'></i>
                                    <span>Excluir</span>
                                </a>
                            </td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>
@endsection