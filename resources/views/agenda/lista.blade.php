@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Agendamentos
                        <a href="{{ url('agenda/create') }}" class="btn btn-success btn-sm float-end">
                            Novo Agendamento
                        </a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">
                                {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Plano</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Nome Pet</th>
                                    <th>Raça</th>
                                    <th>Idade Aproximada</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($agendas as $agenda)
                                    <tr>
                                        <td>{{ $agenda->id }}</td>
                                        <td>{{ $agenda->plano->nome }}</td>
                                        <td>{{ $agenda->horario->data }}</td>
                                        <td>{{ $agenda->horario->hora }}</td>
                                        <td>{{ $agenda->nome }}</td>
                                        <td>{{ $agenda->telefone }}</td>
                                        <td>{{ $agenda->email }}</td>
                                        <td>{{ $oferta->endereco }}</td>
                                        <td>{{ $oferta->nomepet }}</td>
                                        <td>{{ $oferta->idadeaprox }}</td>
                                        <td>
                                            <a href="{{ url('agendas/' . $agenda->id) }}" class="btn btn-primary btn-sm">
                                                Editar
                                            </a>
                                            {!! Form::open(['method' => 'DELETE', 'url' => 'agendas/' . $agenda->id, 'style' => 'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            Não há itens para listar!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                            {{ $ofertas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
