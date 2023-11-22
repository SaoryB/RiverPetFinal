<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Perfis
                    </div>
                    <div class="card-body">
                        <?php if(Session::has('mensagem_sucesso')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('mensagem_sucesso')); ?>

                            </div>
                        <?php endif; ?>
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
                                <?php $__empty_1 = true; $__currentLoopData = $nossosperfis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nossosperfil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($nossosperfil->id); ?></td>
                                        <td><img src="uploads/ofertas/<?php echo e($nossosperfil->foto); ?>" height="50" alt=""></td>
                                        <td><?php echo e($nossosperfil->nome); ?></td>
                                        <td><?php echo e($nossosperfil->descricao); ?></td>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="3">
                                            Não há itens para listar!
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                            <?php echo e($nossosperfis->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/nossosperfil/listapublic.blade.php ENDPATH**/ ?>