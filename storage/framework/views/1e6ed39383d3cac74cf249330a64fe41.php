<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Planos</title>
</head>
<body>
    <h1>Relatório de Planos</h1>
    <hr>
    <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $planos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($plano->id); ?></td>
                <td><?php echo e($plano->nome); ?></td>
                <td><?php echo e($plano->descricao); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="3">Nenhum plano cadastrada</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
<?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/reports/planos.blade.php ENDPATH**/ ?>