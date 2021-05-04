

<?php $__env->startSection('title', 'Administrador'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de Categorias</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('info')): ?>
    <div class="alert alert-success">
        <strong><?php echo e(session('info')); ?></strong>
    </div>
<?php endif; ?>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="<?php echo e(route('admin.categorias.create')); ?>">Agregar Categoria</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($categoria->id); ?></td>
                            <td><?php echo e($categoria->name); ?></td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.categorias.edit', $categoria)); ?>">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="<?php echo e(route('admin.categorias.destroy', $categoria)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/admin/categorias/index.blade.php ENDPATH**/ ?>