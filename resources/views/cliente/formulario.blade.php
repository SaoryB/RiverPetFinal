@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dados dos Clientes
                    <a href="{{ url('cliente') }}" class="btn btn-success btn-sm float-end">
                        Listar Clientes
                    </a>
                </div>
                <div class="card-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">
                            {{ Session::get('mensagem_sucesso')}}
                        </div>
                    @endif
                    @if(Session::has('mensagem_erro'))
                    <div class="alert alert-danger">
                        {{ Session::get('mensagem_erro')}}
                    </div>
                @endif
                @if(Route::is('cliente.show'))
                    {!! Form::model($cliente,
                        ['method'=>'PATCH',
                        'files'=>'True',
                        'url'=>'cliente/'.$cliente->id]) !!}
                @else
                    {!! Form::open (['method' => 'POST', 'files'=>'True', 'url'=>'cliente']) !!}
                @endif
                    {!! Form::label('primeironome','PrimeiroNome') !!}
                    {!! Form::input('text','primeironome', null, ['class'=>'form-control',
                            'placeholder'=>'PrimeiroNome',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('sobrenome','Sobrenome') !!}
                    {!! Form::input('text','sobrenome', null, ['class'=>'form-control',
                            'placeholder'=>'Sobrenome',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('email','Email') !!}
                    {!! Form::input('text','email', null, ['class'=>'form-control',
                            'placeholder'=>'Email',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('telefone','Telefone') !!}
                    {!! Form::input('text','telefone', null, ['class'=>'form-control',
                            'placeholder'=>'Telefone',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('endereco','Endereco') !!}
                    {!! Form::input('text','endereco', null, ['class'=>'form-control',
                            'placeholder'=>'Endereco',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('bairro','Bairro') !!}
                    {!! Form::input('text','bairro', null, ['class'=>'form-control',
                            'placeholder'=>'Bairro',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('cidade','Cidade') !!}
                    {!! Form::input('text','cidade', null, ['class'=>'form-control',
                            'placeholder'=>'Cidade',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('nomedeusuario','NomeUsuario') !!}
                    {!! Form::input('text','nomedeusuario', null, ['class'=>'form-control',
                            'placeholder'=>'NomeUsuario',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('senha','Senha') !!}
                    {!! Form::input('text','senha', null, ['class'=>'form-control',
                            'placeholder'=>'Senha',
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
