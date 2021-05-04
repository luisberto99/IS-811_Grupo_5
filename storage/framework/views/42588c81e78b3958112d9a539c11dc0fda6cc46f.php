<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Categorias suscritas')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">               
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Categoria</th>
                                <th class="border border-gray-400 px-4 py-2">Fecha Subcripcion</th>
                                <th class="border border-gray-400 px-4 py-2">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $idSuscrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indice =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2"><?php echo e($nombreCategoriaSuscrita[$indice]); ?></td>
                                    <td class="border border-gray-400 px-4 py-2"><?php echo e($fecha[$indice]); ?></td>
                                    <td class="border border-gray-400 px-4 py-2"><a href="http://127.0.0.1:8000/mycategories/eliminar/<?php echo e($item); ?>/<?php echo e($id); ?>"><button>Eliminar</button></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Categorias no suscritas')); ?>

        </h2>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Categoria</th>
                    <th class="border border-gray-400 px-4 py-2">Agregar</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $idNoSuscrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $idNo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border border-gray-400 px-4 py-2"><?php echo e($nombreCategoria[$i]); ?></td>
                        <td class="border border-gray-400 px-4 py-2"><a href="http://127.0.0.1:8000/mycategories/<?php echo e($idNo); ?>/<?php echo e($id); ?>"><button>Agregar</button></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/categorias/categorias.blade.php ENDPATH**/ ?>