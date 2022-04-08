<?php $__env->startSection("titulo", "Editar categoría"); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="container">
        <div class="columns">
            <div class="column is-half-tablet">
                <h1 class="is-size-1">Editar categoría</h1>
                <form method="POST" action="<?php echo e(route("guardarCambiosDeArea")); ?>">
                    <?php echo method_field("put"); ?>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($area->id); ?>" name="id">
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <input value="<?php echo e($area->nombre); ?>" autocomplete="off" name="nombre" class="input" type="text"
                                   placeholder="Nombre de categoría">
                        </div>
                    </div>
                    <?php echo $__env->make("errores", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <button class="button is-success">Guardar</button>
                    <a class="button is-primary" href="<?php echo e(route("areas")); ?>">Ver todas</a>
                </form>
                <br>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Sistema_inventario_laravel\administracion_inventario\resources\views/editar_area.blade.php ENDPATH**/ ?>