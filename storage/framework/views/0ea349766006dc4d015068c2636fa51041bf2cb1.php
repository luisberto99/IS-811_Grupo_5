<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <h1 class="mx-auto">Categorias a las que estoy suscrito</h1>
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
    <h1 class="mx-auto">Categorias a las que no estoy suscrito</h1>
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
</body>
</html><?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/categories.blade.php ENDPATH**/ ?>