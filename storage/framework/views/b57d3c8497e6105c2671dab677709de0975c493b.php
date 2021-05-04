<div>
    <h1 class="text-4xl dark:text-white">
       <a href="">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($cate->name); ?>   
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </a>
    </h1>
    <div>
        <div id="sync1c-<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($cate->id); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" class="owl-carousel owl-theme sync">
          
          <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
                    
          <div class="item"> 
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
                         <?php $__env->slot('Userid'); ?> 
                            <?php echo e($advert->user_id); ?>

                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('UserName'); ?> 
                            <?php echo e($advert->user_name); ?>

                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('UserLink'); ?> 
                            <?php echo e(route('perfiles.show', $advert->user_id)); ?>

                         <?php $__env->endSlot(); ?>
                                            
                     <?php if (isset($__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f)): ?>
<?php $component = $__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f; ?>
<?php unset($__componentOriginalcbce06e690d8b3017575a2b471b43c48a557230f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
          </div>
        
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
    </div>
    <script>
        $(document).ready(function() {

        var sync1 = $("#sync1c-<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($cate->id); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
        items : 4,
        slideSpeed : 80000,
        nav: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsiveRefreshRate : 200,
        navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);


        function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;
        
        //if you disable loop you have to comment this block
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);
        
        if(current < 0) {
            current = count;
        }
        if(current > count) {
            current = 0;
        }
        }

        function syncPosition2(el) {
        if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
        }
        });
    </script>
    
</div>
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/livewire/landing-carrousels.blade.php ENDPATH**/ ?>