@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Planos
                </div>
                <div class="card-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">
                            {{ Session::get('mensagem_sucesso')}}
                        </div>
                    @endif
                    <table class="table rable-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($planos as $plano)
                                <tr>
                                    <td>{{ $plano->id }}</td>
                                    <td>{{ $plano->nome }}</td>
                                    <td>{{ $plano->descricao }}</td>
                                    <td>{{ $plano->preco }}</td>
                                </tr>
                            @empty
                            <tr><td colspan="3"> Não há itens para listar!</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="pagination justify-content-center">
                        {{ $planos->links() }}
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
