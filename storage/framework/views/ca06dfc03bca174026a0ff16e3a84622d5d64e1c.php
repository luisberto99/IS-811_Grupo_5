<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="flex flex-row h-full">

        <div id="menu-container" class="w-1/4 container mx-auto mt-4 py-8 px-12 hidden md:inline-block bg-gray-100 z-50 transition duration-500">
           <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.filter-options','data' => []]); ?>
<?php $component->withName('filter-options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('dep'); ?> 
                    <?php echo e($depto); ?>

                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('cat'); ?> 
                    <?php echo e($cat); ?>

                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('muni'); ?> 
                    <?php echo e($muni); ?>

                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('order'); ?> 
                    <?php echo e($order); ?>

                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('desde'); ?> 
                    <?php echo e($desde); ?>

                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('hasta'); ?> 
                    <?php echo e($hasta); ?>

                 <?php $__env->endSlot(); ?>

                <?php if(isset($idUser)): ?>

                     <?php $__env->slot('title'); ?> 
                        <?php echo e('Mis anuncios'); ?>

                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('userAd'); ?> 
                        <?php echo e('Mis anuncios'); ?>

                     <?php $__env->endSlot(); ?>
                <?php else: ?>
                     <?php $__env->slot('title'); ?> 
                        <?php echo e('Encuentra lo que necesites'); ?>

                     <?php $__env->endSlot(); ?>
                <?php endif; ?>

            <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
    
        <div class="sm:w-full md:w-3/4 h-full mx-auto py-10 px-12 relative">

            <div class="h-15 md:absolute top-2 right-12 sm:flex flex-row text-sm">
                
                    <div id="btn-menu" class="mt-4 w-full rounded text-lg text-center bg-gray border border-solid border-current b p-2 md:hidden cursor-pointer">
                        Filtrar
                    </div>
                
                <span class="py-2 px-2">Ordenar por:   </span>
                <select onchange="change()"" name="order" id="selectOrder" class="rounded h-15 py-1 leading-4 text-sm">
                    <option value="0">
                        Más reciente primero
                    </option>
                    <option value="1">
                        Más antiguo primero
                    </option>
                    <option value="2">
                        Precio: más alto a más bajo
                    </option>
                    <option value="3">
                        Precio: más bajo a más alto
                    </option>
                    
                </select>
            </div>

            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3  gap-4 ">

         
            
                <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            
                <?php if (isset($component)) { $__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdvertCard::class, []); ?>
<?php $component->withName('advert-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('title'); ?> 
                        <?php echo e($advert->title); ?>

                     <?php $__env->endSlot(); ?>
                      <?php $__env->slot('imgUser'); ?> 
                        <?php echo e($advert->imgUser); ?>

                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('imgAdvert'); ?> 
                        <?php echo e($advert->imgAdvert); ?>

                     <?php $__env->endSlot(); ?>
                    
                     <?php $__env->slot('price'); ?> 
                        <?php echo e(number_format($advert->price,2)); ?>

                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('location'); ?> 
                        <?php echo e($advert->township . ', '. $advert->departament); ?>

                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('date'); ?> 
                        <?php echo e(number_format((strtotime('now')-strtotime($advert->creation_date))/86400,0)); ?>

                        
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('AdvertLink'); ?> 
                        <?php echo e(route('advert.show', $advert->advert_id)); ?>

                     <?php $__env->endSlot(); ?>


                    <?php if(isset($idUser)): ?>
                     <?php $__env->slot('Userid'); ?> 
                        <?php echo e(auth()->user()->id); ?>

                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('UserName'); ?> 
                        <?php echo e(auth()->user()->name); ?>

                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('UserLink'); ?> 
                        <?php echo e(route('perfiles.show', $idUser)); ?>

                     <?php $__env->endSlot(); ?>

                    
                        <?php if($advert->advert_status_id == 1): ?>
                            <div class="py-1 w-100">
                                <div class="w-50 py-4" style="float: left"></div>
                                <div class="py-1" style="float: right" >
                                    <a href="<?php echo e(route('advertsUser.edit',$advert->id)); ?>" <?php if($advert->advert_status_id == 2): ?> aria-disabled="true" class=" bg-gray-100 rounded-lg text-white mr-2" <?php endif; ?> class="px-4 bg-gray-400 rounded-lg text-white -bottom-8">Eliminar</a>
                                </div>
                            </div>  
                        <?php endif; ?>

                                            
                    <?php else: ?>

                         <?php $__env->slot('Userid'); ?> 
                            <?php echo e($advert->user_id); ?>

                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('UserName'); ?> 
                            <?php echo e($advert->user_name); ?>

                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('UserLink'); ?> 
                            <?php echo e(route('perfiles.show', $advert->user_id )); ?>

                         <?php $__env->endSlot(); ?>

                    <?php endif; ?>
    
                    
                 <?php if (isset($__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f)): ?>
<?php $component = $__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f; ?>
<?php unset($__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
            </div>
            <div class="card-footer">
                <?php echo e($adverts->links('pagination::bootstrap-4')); ?>

            </div>
        </div>
        
    </div>



</div>
    <?php echo $__env->yieldContent('js'); ?>


    <script>
        $(function(){
            function slideMenu(){
                var activeState = !$("#menu-container").hasClass("hidden");
                $("#menu-container").animate({left: activeState ? "0%" : "-100%"}, 400);
            }

            function toggleMenu(even){
                event.stopPropagation();

                $("#menu-container").toggleClass("w-3/4");
                $("#menu-container").toggleClass("hidden");
                $("#btn-close-menu").toggleClass("hidden");
                $("#menu-container").toggleClass("absolute");
                $("#menu-container").toggleClass("shadow-2xl");
                slideMenu();
            }

            $('#btn-close-menu').click(function(even){
                toggleMenu(even);
            });
            $('#btn-menu').click(function(even){
                toggleMenu(even);
            });

            
        });
    </script>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/components/adverts.blade.php ENDPATH**/ ?>