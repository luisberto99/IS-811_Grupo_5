<?php $menuItemHelper = app('JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper'); ?>

<?php if($menuItemHelper->isSearchBar($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isSubmenu($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-dropdown-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isLink($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH C:\Users\pania\Documents\Clases I 2021\Ingenieria software\IS-811_Grupo_5-master\IS-811_Grupo_5-master\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/navbar/menu-item.blade.php ENDPATH**/ ?>