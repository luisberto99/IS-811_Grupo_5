<!-- component -->
<div <?php echo e($attributes->merge(['class'=>"max-w-sm overflow-hidden rounded border bg-white shadow mb-4 mt-4"])); ?>>
    <div class="relative">
        <a href='<?php echo e($AdvertLink); ?>'>
            <div class="h-48 bg-cover bg-no-repeat bg-center"
              style="background-image: url(<?php echo e(asset( $imgAdvert )); ?>)">
            </div>
        </a>
      <div style="background-color: rgba(0,0,0,0.6)"
        class="absolute bottom-0 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">$ <?php echo e($price); ?></div>
      <div style="bottom: -20px;" class="absolute right-0 w-10 mr-2">
        <a href="<?php echo e($UserLink); ?>">
          <img class="rounded-full border-2 border-white" src="<?php if($imgUser != ""): ?><?php echo e(asset('/storage/'.$imgUser)); ?><?php else: ?><?php echo e(asset('/storage/profile-photos/user.png')); ?><?php endif; ?>" >
        </a>
      </div>
    </div>
    <div class="p-3">
      <h3 class="mr-10 h-16 text-md truncate-2nd">
          <?php if(isset($title)): ?>
              <a class="hover:text-blue-500" href="<?php echo e($AdvertLink); ?>"><?php echo e(substr($title, 0 ,25)); ?></a>
          <?php endif; ?>
      </h3>
      <div class="flex items-start justify-between">
        <p class="text-xs text-gray-500"><?php echo e($location); ?> </p>
        <?php if(isset(auth()->user()->id)): ?>
          <button class="outline text-xs text-gray-500 hover:text-blue-500" title="Bookmark this ad"><i class="far fa-bookmark"></i></button>
        <?php endif; ?>
      </div>
      <p class="text-xs text-gray-500"><a href="<?php echo e($UserLink); ?>" class="hover:underline hover:text-blue-500"><?php echo e($UserName); ?></a> • <?php echo e($date); ?> days ago</p>
      <p><?php echo e($slot); ?></p>
    </div>
  </div><?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/components/advert-card.blade.php ENDPATH**/ ?>