@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Dados dos Agendamentos
                        <a href="{{ url('agendas') }}" class="btn btn-success btn-sm float-end">
                            Listar Agendamentos
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

                        @if(Route::is('agendas.show'))
                            {!! Form::model($agenda,
                                            ['method'=>'PATCH',
                                            'url'=>'agenda/'.$agenda->id]) !!}
                        @else
                            {!! Form::open(['method'=>'POST', 'url'=>'agenda']) !!}
                        @endif
                        {!! Form::label('plano_id', "Plano") !!}
                        {!! Form::select('plano_id',
                                         $planos,
                                         null,
                                         ['class'=>'form-control',
                                         'placeholder'=>'Selecione o plano',
                                         'required']) !!}
                        {!! Form::label('horario_id', "Data") !!}
                        {!! Form::select('horario_id',
                                         $horarios,
                                         null,
                                         ['class'=>'form-control',
                                         'placeholder'=>'Selecione o produto',
                                         'required']) !!}
                        {!! Form::label('horario_id', "Hora") !!}
                        {!! Form::select('horario_id',
                                         $horarios,
                                         null,
                                         ['class'=>'form-control',
                                         'placeholder'=>'Selecione o produto',
                                         'required']) !!}
                        {!! Form::label('nome','Nome') !!}
                        {!! Form::input('text','nome', null, ['class'=>'form-control',
                                                    'placeholder'=>'Descrição',
                                                    'required',
                                                    'maxlength' =>50,
                                                    'autofocus']) !!}
                        {!! Form::label('telefone', 'Telefone') !!}
                        {!! Form::input('text', 'telefone',
                                        null,
                                        ['class'=>'form-control',
                                        'placeholder'=>'Data',
                                        'required']) !!}
                        {!! Form::label('email','email') !!}
                        {!! Form::input('text','email', null, ['class'=>'form-control',
                                                     'placeholder'=>'Link',
                                                     'required',
                                                     'maxlength' =>50,
                                                     'autofocus']) !!}
                        {!! Form::label('endereco','Endereço') !!}
                        {!! Form::input('text','endereco', null, ['class'=>'form-control',
                                                     'placeholder'=>'Link',
                                                     'required',
                                                     'maxlength' =>50,
                                                     'autofocus']) !!}
                        {!! Form::label('nomepet','nome pet') !!}
                        {!! Form::input('text','nomepet', null, ['class'=>'form-control',
                                                     'placeholder'=>'Link',
                                                     'required',
                                                     'maxlength' =>50,
                                                     'autofocus']) !!}
              {!! Form::label('raca','Raça') !!}
              {!! Form::input('text','raca', null, ['class'=>'form-control',
                                           'placeholder'=>'Link',
                                           'required',
                                           'maxlength' =>50,
                                           'autofocus']) !!}
                             {!! Form::label('idadeaprox','Idade Aproximada') !!}
                             {!! Form::input('text','idadeaprox', null, ['class'=>'form-control',
                                                          'placeholder'=>'Link',
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
