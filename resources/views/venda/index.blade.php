@extends('venda.main')

@section('content')

<div style="display: grid; place-items: center;">

<table class="table table-hover text-nowrap">
        <thead>
            <td>Nome</td>
            <td>Preço</td>
            <td>Peso</td>
            <td>Descricao</td>
            <td>Imagem</td>
            <td>Imagem 2</td>
            <td>Imagem 3</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['preco'] . "</td>" .
                            "<td>" .$linha['peso'] . "</td>" .
                            "<td>" .$linha['descricao'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .
                            "<td><img src='" .$linha['imagemum'] . "' alt='' width='100' height='100'></td>" .
                            "<td><img src='" .$linha['imagemdois'] . "' alt='' width='100' height='100'></td>" .                      
                        "</tr>";

                }
            ?>
        </tbody>
    </table>
</div>


@endsection