<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Dados dos Perfis
                        <a href="<?php echo e(url('nossosperfil')); ?>" class="btn btn-success btn-sm float-end">
                            Listar Perfis
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
                        <?php if(Route::is('nossosperfis.show')): ?>
                            <?php echo Form::model($nossosperfil,
                                            ['method'=>'PATCH',
                                            'url'=>'nossosperfis/'.$nossosperfil->id]); ?>

                        <?php else: ?>
                            <?php echo Form::open(['method'=>'POST', 'url'=>'nossosperfil']); ?>

                        <?php endif; ?>
                        <?php echo Form::label('foto','Imagem Produto'); ?>

                        <?php echo Form::file('foto',['class'=>'form-control btn-sm']); ?>

                        <?php echo Form::label('nome','Nome'); ?>

                        <?php echo Form::input('text','nome', null, ['class'=>'form-control',
                                                     'placeholder'=>'Nome',
                                                     'required',
                                                     'maxlength' =>50,
                                                     'autofocus']); ?>

                        <?php echo Form::label('descricao','Descrição'); ?>

                        <?php echo Form::input('text','descricao', null, ['class'=>'form-control',
                                                    'placeholder'=>'Descrição',
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/nossosperfil/formulario.blade.php ENDPATH**/ ?>