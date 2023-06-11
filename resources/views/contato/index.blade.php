@extends('layouts.main')

@section('content')


<div>
          <h1><i class="fa fa-dashboard"></i>Consulta de contatos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="til-body">Consulta de contatos
        </div>
    <div class="form-group">
        <form method='get' action='/contato/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="nome"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>

    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Assunto</td>
            <td>Mensagem</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['email'] . "</td>" .
                            "<td>" .$linha['assunto'] . "</td>" .
                            "<td>" .$linha['mensagem'] . "</td>" .
                            "<td>
                                <a href='/contato/excluir/" . $linha['id']. "' class='btn btn-danger'>
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