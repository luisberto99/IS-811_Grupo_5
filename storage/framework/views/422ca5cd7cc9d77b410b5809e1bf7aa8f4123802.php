<div class=" dark:text-white">
   <div class="w-full  md:grid md:inline-block  md:grid-cols-5 lg:grid-cols-9 grap-4 text-white justify-center sm:hidden">
        <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(asset('adverts/show/f?&depto='. $departamento->id)); ?>">
                <button class="w-11/12 m-1 border-box md:h-10 lg:h-12 rounded pointer bg-red-500 hover:bg-red-700">
                    <?php echo e($departamento->name); ?>

                </button>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</div>
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/livewire/menu-departamentos.blade.php ENDPATH**/ ?>