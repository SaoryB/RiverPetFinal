@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Clientes
                    <a href="{{ url('cliente/create') }}" class="btn btn-success btn-sm float-end">
                        Novo Cliente
                    </a>
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
                                <th>Primeiro Nome</th>
                                <th>Sobrenome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Nome de Usuário</th>
                                <th>Senha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->primeironome }}</td>
                                    <td>{{ $cliente->sobrenome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>{{ $cliente->bairro }}</td>
                                    <td>{{ $cliente->cidade }}</td>
                                    <td>{{ $cliente->nomedeusuario }}</td>
                                    <td>{{ $cliente->senha }}</td>
                                    <td>
                                        <a href="{{ url('cliente/'.$cliente->id) }}" class="btn btn-primary btn-sm">
                                            Editar
                                        </a>
                                        {!!  Form::open([
                                            'method' => 'DELETE',
                                            'url' =>'cliente/'.$cliente->id,
                                            'style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger btn-sm">
                                            Excluir
                                            </button>
                                        {!!  Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                            <tr><td colspan="3"> Não há itens para listar!</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="pagination justify-content-center">
                        {{ $clientes->links() }}
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('cliente/report') }}" target="_blank"
                    class="btn btn-sm btn-warning">
                        Relatório
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
