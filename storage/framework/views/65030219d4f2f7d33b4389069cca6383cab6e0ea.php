<div>
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
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/livewire/categorias/suscrito.blade.php ENDPATH**/ ?>