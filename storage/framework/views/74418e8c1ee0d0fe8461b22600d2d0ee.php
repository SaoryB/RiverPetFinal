<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dados dos Horários
                    <a href="<?php echo e(url('horario')); ?>" class="btn btn-success btn-sm float-end">
                        Listar Horários
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
                <?php if(Route::is('horario.show')): ?>
                    <?php echo Form::model($horario,
                        ['method'=>'PATCH',
                        'files'=>'True',
                        'url'=>'horario/'.$horario->id]); ?>

                <?php else: ?>
                    <?php echo Form::open (['method' => 'POST', 'files'=>'True', 'url'=>'horario']); ?>

                <?php endif; ?>
                    <?php echo Form::label('data','Data'); ?>

                    <?php echo Form::input('text','data', null, ['class'=>'form-control',
                            'placeholder'=>'Data',
                            'required',
                            'maxlength' =>50,
                            'autofocus']); ?>

                    <?php echo Form::label('hora','Hora'); ?>

                    <?php echo Form::input('text','hora', null, ['class'=>'form-control',
                            'placeholder'=>'Hora',
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/horario/formulario.blade.php ENDPATH**/ ?>