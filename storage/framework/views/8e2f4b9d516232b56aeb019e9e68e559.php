<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Planos
                    <a href="<?php echo e(url('plano/create')); ?>" class="btn btn-success btn-sm float-end">
                        Novo Plano
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
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $planos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($plano->id); ?></td>
                                    <td><?php echo e($plano->nome); ?></td>
                                    <td><?php echo e($plano->descricao); ?></td>
                                    <td><?php echo e($plano->preco); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('plano/'.$plano->id)); ?>" class="btn btn-primary btn-sm">
                                            Editar
                                        </a>
                                        <?php echo Form::open([
                                            'method' => 'DELETE',
                                            'url' =>'plano/'.$plano->id,
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
                        <?php echo e($planos->links()); ?>

                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(url('plano/report')); ?>" target="_blank"
                    class="btn btn-sm btn-warning">
                        Relatório
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/plano/lista.blade.php ENDPATH**/ ?>