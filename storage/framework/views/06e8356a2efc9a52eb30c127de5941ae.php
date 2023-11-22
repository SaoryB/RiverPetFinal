<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Clientes
                    <a href="<?php echo e(url('cliente/create')); ?>" class="btn btn-success btn-sm float-end">
                        Novo Cliente
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
                                <th>Primeiro Nome</th>
                                <th>Sobrenome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Nome de Usuário</th>
                                <th>Senha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($cliente->id); ?></td>
                                    <td><?php echo e($cliente->primeironome); ?></td>
                                    <td><?php echo e($cliente->sobrenome); ?></td>
                                    <td><?php echo e($cliente->email); ?></td>
                                    <td><?php echo e($cliente->telefone); ?></td>
                                    <td><?php echo e($cliente->endereco); ?></td>
                                    <td><?php echo e($cliente->bairro); ?></td>
                                    <td><?php echo e($cliente->cidade); ?></td>
                                    <td><?php echo e($cliente->nomeusuario); ?></td>
                                    <td><?php echo e($cliente->senha); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('cliente/'.$cliente->id)); ?>" class="btn btn-primary btn-sm">
                                            Editar
                                        </a>
                                        <?php echo Form::open([
                                            'method' => 'DELETE',
                                            'url' =>'cliente/'.$cliente->id,
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
                        <?php echo e($clientes->links()); ?>

                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo e(url('cliente/report')); ?>" target="_blank"
                    class="btn btn-sm btn-warning">
                        Relatório
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/cliente/lista.blade.php ENDPATH**/ ?>