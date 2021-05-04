

<?php $__env->startSection('title', 'Administrador'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Crear Categorias</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <?php echo Form::open(['route' => 'admin.categorias.store']); ?>

            <div class="form-group">
                <?php echo Form::label('name', 'nombre'); ?>

                <?php echo Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']); ?>

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('slug', 'slug'); ?>

                <?php echo Form::text('slug', NULL, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria','readonly']); ?>

                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php echo Form::submit('Crear categoria', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')); ?>"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
  });
});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/admin/categorias/create.blade.php ENDPATH**/ ?>