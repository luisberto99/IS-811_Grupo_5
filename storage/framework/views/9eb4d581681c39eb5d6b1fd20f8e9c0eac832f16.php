<div class="py-5  dark:text-white">
    <h1 class="text-lg">Categorias</h1>
    <div class="w-full  md:grid md:inline-block  md:grid-cols-5 lg:grid-cols-9 grap-4 text-white justify-center sm:hidden">
         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <a href="<?php echo e(asset('adverts/show/f?&category='. $Category->id)); ?>">
                 <button class="w-11/12 m-1 border-box md:h-10 lg:h-20 rounded pointer bg-red-700 hover:bg-red-500">
                     <?php echo e($Category->name); ?>

                 </button>
                 
             </a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 </div>
 <?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/livewire/menu-categorias.blade.php ENDPATH**/ ?>