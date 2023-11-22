@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Dados dos Perfis
                        <a href="{{ url('nossosperfil') }}" class="btn btn-success btn-sm float-end">
                            Listar Perfis
                        </a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">
                                {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif
                        @if(Session::has('mensagem_erro'))
                            <div class="alert alert-danger">
                                {{ Session::get('mensagem_erro') }}
                            </div>
                        @endif
                        @if(Route::is('nossosperfis.show'))
                            {!! Form::model($nossosperfil,
                                            ['method'=>'PATCH',
                                            'url'=>'nossosperfis/'.$nossosperfil->id]) !!}
                        @else
                            {!! Form::open(['method'=>'POST', 'url'=>'nossosperfil']) !!}
                        @endif
                        {!! Form::label('foto','FOTO') !!}
                        {!! Form::file('foto',['class'=>'form-control btn-sm']) !!}
                        {!! Form::label('nome','Nome') !!}
                        {!! Form::input('text','nome', null, ['class'=>'form-control',
                                                     'placeholder'=>'Nome',
                                                     'required',
                                                     'maxlength' =>50,
                                                     'autofocus']) !!}
                        {!! Form::label('descricao','Descrição') !!}
                        {!! Form::input('text','descricao', null, ['class'=>'form-control',
                                                    'placeholder'=>'Descrição',
                                                    'required',
                                                    'maxlength' =>50,
                                                    'autofocus']) !!}
                        {!! Form::submit('Salvar',
                                        ['class'=>'float-end btn btn-primary mt-3']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
