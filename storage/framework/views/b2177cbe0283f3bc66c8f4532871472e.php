<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dados dos Clientes
                    <a href="<?php echo e(url('cliente')); ?>" class="btn btn-success btn-sm float-end">
                        Listar Clientes
                    </a>
                </div>
                <div class="card-body">
                    <?php if(Session::has('mensagem_sucesso')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('mensagem_sucesso')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('mensagem_erro')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('mensagem_erro')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Route::is('cliente.show')): ?>
                    <?php echo Form::model($cliente,
                        ['method'=>'PATCH',
                        'files'=>'True',
                        'url'=>'cliente/'.$cliente->id]); ?>

                <?php else: ?>
                    <?php echo Form::open (['method' => 'POST', 'files'=>'True', 'url'=>'cliente']); ?>

                <?php endif; ?>
                    <?php echo Form::label('primeironome','PrimeiroNome'); ?>

                    <?php echo Form::input('text','primeironome', null, ['class'=>'form-control',
                            'placeholder'=>'PrimeiroNome',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('sobrenome','Sobrenome'); ?>

                    <?php echo Form::input('text','sobrenome', null, ['class'=>'form-control',
                            'placeholder'=>'Sobrenome',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('email','Email'); ?>

                    <?php echo Form::input('text','email', null, ['class'=>'form-control',
                            'placeholder'=>'Email',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('telefone','Telefone'); ?>

                    <?php echo Form::input('text','telefone', null, ['class'=>'form-control',
                            'placeholder'=>'Telefone',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('endereco','Endereco'); ?>

                    <?php echo Form::input('text','endereco', null, ['class'=>'form-control',
                            'placeholder'=>'Endereco',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('bairro','Bairro'); ?>

                    <?php echo Form::input('text','bairro', null, ['class'=>'form-control',
                            'placeholder'=>'Bairro',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('cidade','Cidade'); ?>

                    <?php echo Form::input('text','cidade', null, ['class'=>'form-control',
                            'placeholder'=>'Cidade',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('nomedeusuario','NomeUsuario'); ?>

                    <?php echo Form::input('text','nomedeusuario', null, ['class'=>'form-control',
                            'placeholder'=>'NomeUsuario',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('senha','Senha'); ?>

                    <?php echo Form::input('text','senha', null, ['class'=>'form-control',
                            'placeholder'=>'Senha',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::submit('Salvar',
                            ['class'=>'float-end btn btn-primary mt-3']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/cliente/formulario.blade.php ENDPATH**/ ?>