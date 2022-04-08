<?php if(!empty($errors->all())): ?>
    <div class="notification is-danger">
        <h4 class="is-size-4">Por favor, valida los siguientes errores:</h4>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($mensaje); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?><?php /**PATH C:\Sistema_inventario_laravel\administracion_inventario\resources\views/errores.blade.php ENDPATH**/ ?>