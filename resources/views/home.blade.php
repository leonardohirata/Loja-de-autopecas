@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/produto"><i class="fa fa-cog fa-lg"></i> Cadastro de produtos</a></br>
            <a href="/produto"><i class="fa fa-cog fa-lg"></i> Cadastro de clientes</a></br>
            <a href="/produto"><i class="fa fa-cog fa-lg"></i> Cadastro de Comentarios</a></br>
            <a href="/produto"><i class="fa fa-cog fa-lg"></i> Consulta de contatos</a></br>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
