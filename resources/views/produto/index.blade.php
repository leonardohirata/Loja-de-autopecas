@extends('layouts.main')

@section('content')

        <div>
          <h1><i class="fa fa-dashboard"></i>Cadastro de Produtos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="til-body">Cadastro de produtos
        </div>

    <div class="form-group">
        <form method='get' action='/produto/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="nome"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>
    <div>
        <a href='/produto/novo_produto' class='btn btn-success'>
            Novo
        </a> 
    </div>

    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Estoque</td>
            <td>Preço</td>
            <td>Peso</td>
            <td>Descricao</td>
            <td>Imagem</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['preco'] . "</td>" .
                            "<td>" .$linha['peso'] . "</td>" .
                            "<td>" .$linha['estoque'] . "</td>" .
                            "<td>" .$linha['descricao'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .
                            "<td><img src='" .$linha['imagemum'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .
                            "<td><img src='" .$linha['imagemdois'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .                      
                            "<td>
                                <a href='/produto/editar/" . $linha['id']. "' class='btn btn-default'>
                                    <i class='fa fa-edit'></i>
                                    <span>Editar</span>
                                </a>

                                <a href='/produto/excluir/" . $linha['id']. "' class='btn btn-danger'>
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