@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dados dos Planos
                    <a href="{{ url('plano') }}" class="btn btn-success btn-sm float-end">
                        Listar Planos
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
                @if(Route::is('plano.show'))
                    {!! Form::model($plano,
                        ['method'=>'PATCH',
                        'files'=>'True',
                        'url'=>'plano/'.$plano->id]) !!}
                @else
                    {!! Form::open (['method' => 'POST', 'files'=>'True', 'url'=>'plano']) !!}
                @endif
                    {!! Form::label('nome','Nome') !!}
                    {!! Form::input('text','nome', null, ['class'=>'form-control',
                            'placeholder'=>'Nome',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('descricao','Descricao') !!}
                    {!! Form::input('text','descricao', null, ['class'=>'form-control',
                            'placeholder'=>'Descricao',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('preco','Preco') !!}
                    {!! Form::input('text','preco', null, ['class'=>'form-control',
                            'placeholder'=>'Preco',
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
