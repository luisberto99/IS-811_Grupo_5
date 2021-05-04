<?php $__env->startSection('title', 'Administrador'); ?>



<?php $__env->startSection('content_header'); ?>
    <h1>Categorias</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.categorias')->html();
} elseif ($_instance->childHasBeenRendered('MrJeept')) {
    $componentId = $_instance->getRenderedChildComponentId('MrJeept');
    $componentTag = $_instance->getRenderedChildComponentTagName('MrJeept');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MrJeept');
} else {
    $response = \Livewire\Livewire::mount('admin.categorias');
    $html = $response->html();
    $_instance->logRenderedChild('MrJeept', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/admin/categorias.blade.php ENDPATH**/ ?>