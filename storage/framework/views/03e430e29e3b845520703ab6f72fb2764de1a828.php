<?php if(session("mensaje") && session("tipo")): ?>
    <div class="notification is-<?php echo e(session('tipo')); ?>">
        <?php echo e(session('mensaje')); ?>

    </div>
<?php endif; ?><?php /**PATH C:\Sistema_inventario_laravel\administracion_inventario\resources\views/notificacion.blade.php ENDPATH**/ ?>