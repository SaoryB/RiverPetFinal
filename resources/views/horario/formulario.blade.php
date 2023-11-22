@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dados dos Horários
                    <a href="{{ url('horario') }}" class="btn btn-success btn-sm float-end">
                        Listar Horários
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
                @if(Route::is('horario.show'))
                    {!! Form::model($horario,
                        ['method'=>'PATCH',
                        'files'=>'True',
                        'url'=>'horario/'.$horario->id]) !!}
                @else
                    {!! Form::open (['method' => 'POST', 'files'=>'True', 'url'=>'horario']) !!}
                @endif
                    {!! Form::label('data','Data') !!}
                    {!! Form::input('text','data', null, ['class'=>'form-control',
                            'placeholder'=>'Data',
                            'required',
                            'maxlength' =>50,
                            'autofocus']) !!}
                    {!! Form::label('hora','Hora') !!}
                    {!! Form::input('text','hora', null, ['class'=>'form-control',
                            'placeholder'=>'Hora',
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
