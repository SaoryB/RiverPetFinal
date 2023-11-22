@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Horários
                    <a href="{{ url('horario/create') }}" class="btn btn-success btn-sm float-end">
                        Novo Horário
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
                                <th>Data</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($horarios as $horario)
                                <tr>
                                    <td>{{ $horario->id }}</td>
                                    <td>{{ $horario->data }}</td>
                                    <td>{{ $horario->hora }}</td>
                                    <td>
                                        <a href="{{ url('horario/'.$horario->id) }}" class="btn btn-primary btn-sm">
                                            Editar
                                        </a>
                                        {!!  Form::open([
                                            'method' => 'DELETE',
                                            'url' =>'horario/'.$horario->id,
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
                        {{ $horarios->links() }}
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('horario/report') }}" target="_blank"
                    class="btn btn-sm btn-warning">
                        Relatório
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
