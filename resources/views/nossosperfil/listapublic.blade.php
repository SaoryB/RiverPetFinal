@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Perfis
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
                                    <th>Foto</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($nossosperfis as $nossosperfil)
                                    <tr>
                                        <td>{{ $nossosperfil->id }}</td>
                                        <td><img src="uploads/ofertas/{{ $nossosperfil->foto }}" height="50" alt=""></td>
                                        <td>{{ $nossosperfil->nome }}</td>
                                        <td>{{ $nossosperfil->descricao }}</td>
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
                            {{ $nossosperfis->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
