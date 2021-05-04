<div>
    
         
        <div class="py-6 w-100">
            <div class="w-50 py-4  sm:px-6 lg:px-8" style="float: left">
                <?php if(session('success')): ?>
                <div class="to-blue-200">
                     <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
                <h2>CREA UN ANUNCIO</h2>
                <form action="">
                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Titulo</label>
                        <textarea name="titulodelAnuncio"
                        class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            wire:model="titulodelAnuncio" cols="60" rows="3"  placeholder="Escriba un titulo para su anuncio" ></textarea> 
                            <?php $__errorArgs = ['titulodelAnuncio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-red-600">el titulo del anuncio es obligatoria</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mt-5">
                        <label  class="inline-block w-32 font-bold">Descripcion</label>
                        <textarea name="descripciondelAnuncio"
                        class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            wire:model="descripciondelAnuncio" cols="60" rows="3"  placeholder="Describa las cualidades de lo que quiere vender" ></textarea> 
                            <?php $__errorArgs = ['descripciondelAnuncio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-red-600">la descripcion del anuncio es obligatoria</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                    </div>

                            
                    <div class="mb-8 mt-5">
                        <label class="inline-block w-32 font-bold">Categoria:</label>
                        <select name="categoria" wire:model="categoria" 
                            class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value='-1'>Seleccione una categoria</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($category->id); ?>> <?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['categoria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="error text-red-600">la categoria es obligatoria</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-8">
                        <label class="inline-block w-32 font-bold">Departamento:</label>
                        <select name="departamento" wire:model="departamento" 
                            class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value='-1'>Seleccione un departamento</option>
                                <?php $__currentLoopData = $departaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($departament->id); ?>> <?php echo e($departament->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['departamento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="error text-red-600">el departamento es obligatorio</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-8">
                        <label class="inline-block w-32 font-bold">Municipio:</label>
                        <select name="municipio" wire:model="municipio" 
                            class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value='-1'>Seleccione un municipio</option>
                                <?php $__currentLoopData = $townships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $township): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($township->departament_id == $departamento): ?>
                                       <option value=<?php echo e($township->id); ?>> <?php echo e($township->name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                        <?php $__errorArgs = ['municipio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="error text-red-600">el municipio es obligatorio</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    
                    <br>
    
                    <button wire:click="guardar"  type="button"
                    class="bg-white text-red-800 font-semibold py-2 px-4 border border-red-400 rounded shadow">
                        Publicar Anuncio
                    </button>  
                </form>              
                
            </div>
            <div class="p-5" style="float: left; width: 600px"  >
                <h1 class="py-4 inline-block font-bold">Información del Producto</h1>
                <br>
                <form action="">
                    <div class="m-4 w-100">
                        <label  class="inline-block w-32 font-bold">Precio:</label>
                        <input wire:model="precio" class=" w-80 p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline"
                        type="number" placeholder="0.0">
                        <br>
                        <?php $__errorArgs = ['precio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-red-600">el precio del producto es obligatorio</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="m-4 w-100">
                        <label  class="inline-block w-32 font-bold">Estado:</label>
                        <select name="contenido" wire:model="contenido" 
                        class=" w-80 p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value='-1'>Seleccione un estado</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Usado">Usado</option>
                        </select>
                        <br>
                        <?php $__errorArgs = ['contenido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-red-600">el estado del producto es obligatorio</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="m-4 w-100">
                        <label  class="inline-block w-32 font-bold">Moneda:</label>
                        <select name="moneda" wire:model="moneda" 
                            class=" w-80 p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value='-1'>Tipo de moneda</option>
                                <?php $__currentLoopData = $moneds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moned): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($moned->id); ?>> <?php echo e($moned->currency_type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                        <?php $__errorArgs = ['moneda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="error text-red-600">la moneda es obligatoria</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="m-4 w-100">
                        <label class="inline-block w-32 font-bold">Subir imagenes</label> <br>
                        <input type="file" wire:model="imagenes" multiple accept="image/*" class="mt-5 py-8 p-2 px-4 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                        <br>
                        <?php $__errorArgs = ['imagenes.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-red-600">la imagen del producto es obligatoria</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                </form>


            </div>
        </div>

    
</div>
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/livewire/formulario-anuncio.blade.php ENDPATH**/ ?>