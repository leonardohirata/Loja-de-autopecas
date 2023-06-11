@extends('venda.main')

@section('content')

<div style="display: grid; place-items: center;">

<table class="table table-hover text-nowrap">
        <thead>
            <td>Nome do cliente</td>
            <td>Imagem</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>
</div>


@endsection