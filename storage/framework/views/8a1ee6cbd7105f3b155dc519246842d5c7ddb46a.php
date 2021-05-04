<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/show.css')); ?>">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


        <?php echo \Livewire\Livewire::styles(); ?>


      

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <!--    CARROUSEL  -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>

        <style>
            .sync .item {
                margin: 5px;
                height: 100%;
                }
                .owl-theme .owl-nav {
                /*default owl-theme theme reset .disabled:hover links */
                }
                .owl-theme .owl-nav [class*='owl-'] {
                transition: all 0.3s ease;
                }
                .owl-theme .owl-nav [class*='owl-'].disabled:hover {
                background-color: #D6D6D6;
                }
                .owl-theme {
                position: relative;
                }
                .owl-theme .owl-next,
                .owl-theme .owl-prev {
                width: 22px;
                height: 40px;
                margin-top: -20px;
                position: absolute;
                top: 50%;
                }
                .owl-theme .owl-prev {
                left: 10px;
                }
                .owl-theme .owl-next {
                right: 10px;
                }

        </style>
        
    </head>
    <body class="font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100">
            <?php if(auth()->guard()->check()): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('TYF8vqx')) {
    $componentId = $_instance->getRenderedChildComponentId('TYF8vqx');
    $componentTag = $_instance->getRenderedChildComponentTagName('TYF8vqx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TYF8vqx');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('TYF8vqx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php else: ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu-guest')->html();
} elseif ($_instance->childHasBeenRendered('SL12HPN')) {
    $componentId = $_instance->getRenderedChildComponentId('SL12HPN');
    $componentTag = $_instance->getRenderedChildComponentTagName('SL12HPN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SL12HPN');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu-guest');
    $html = $response->html();
    $_instance->logRenderedChild('SL12HPN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>

                <!-- Page Heading -->
                <?php if(isset($header)): ?>
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <?php echo e($header); ?>

                        </div>
                    </header>
                <?php endif; ?>
            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>