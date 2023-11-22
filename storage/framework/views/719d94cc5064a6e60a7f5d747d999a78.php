<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Horários
                    <a href="<?php echo e(url('horario/create')); ?>" class="btn btn-success btn-sm float-end">
                        Novo Horário
                    </a>
                </div>
                <div class="card-body">
                    <?php if(Session::has('mensagem_sucesso')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('mensagem_sucesso')); ?>

                        </div>
                    <?php endif; ?>
                    <table class="table rable-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Data</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($horario->id); ?></td>
                                    <td><?php echo e($horario->data); ?></td>
                                    <td><?php echo e($horario->hora); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('horario/'.$horario->id)); ?>" class="btn btn-primary btn-sm">
                                            Editar
                                        </a>
                                        <?php echo Form::open([
                                            'method' => 'DELETE',
                                            'url' =>'horario/'.$horario->id,
                                            'style'=>'display:inline']); ?>

                                            <button type="submit" class="btn btn-danger btn-sm">
                                            Excluir
                                            </button>
                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr><td colspan="3"> Não há itens para listar!</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="pagination justify-content-center">
                        <?php echo e($horarios->links()); ?>

                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(url('horario/report')); ?>" target="_blank"
                    class="btn btn-sm btn-warning">
                        Relatório
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/horario/lista.blade.php ENDPATH**/ ?>