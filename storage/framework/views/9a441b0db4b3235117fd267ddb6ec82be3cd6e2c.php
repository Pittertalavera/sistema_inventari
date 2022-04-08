<?php $__env->startSection("titulo", "Fotos de artículo"); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="container" id="app">
        <div class="columns">
            <div class="column">
                <h1 class="is-size-1">Fotos de artículo (<?php echo e(count($articulo->fotos)); ?>)</h1>
            </div>
        </div>
        <div class="columns notification">
            <div class="column">
                <strong><?php echo e($articulo->descripcion); ?>&nbsp;|
                    <?php echo e($articulo->marca); ?>&nbsp;|
                    <?php echo e($articulo->modelo); ?>&nbsp;|
                    <?php echo e($articulo->serie); ?></strong>
                <br>
                <strong>Área: </strong> <?php echo e($articulo->area->nombre); ?><br>
                <strong>Estado: </strong> <?php echo e($articulo->estado); ?><br>
                <strong>Observaciones: </strong> <?php echo e($articulo->observaciones); ?>

            </div>
            <div class="column">
                <div class="field is-horizontal">
                    <form enctype="multipart/form-data" method="post" action="<?php echo e(route("agregarFotosDeArticulo")); ?>">
                        <div class="file is-info has-name is-boxed">
                            <label class="file-label">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($articulo->id); ?>">
                                <input accept="image/jpeg,image/png" ref="fotos" @change="onFotosCambiadas" multiple
                                       class="file-input" type="file" name="fotos[]">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-images"></i>
                                    </span>
                                    <span class="file-label">
                                        Seleccionar fotos
                                    </span>
                                </span>
                                
                                    <span class="file-name" v-for="foto in fotos">
                                        {{foto.name}}
                                    </span>
                                
                            </label>
                        </div>
                        <div class="field"><br>
                            <button :disabled="fotos.length <= 0" class="button is-success" type="submit">Subir</button>
                        </div>

                    </form>
                </div>
                <?php echo $__env->make("errores", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php
            $mostrarPorFila = 3
        ?>
        
        <?php $__empty_1 = true; $__currentLoopData = $articulo->fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            
            <?php if($loop->iteration % $mostrarPorFila === 1): ?>
                <div class="columns">
                    <?php endif; ?>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="<?php echo e(route("fotoDeArticulo", ["nombre" => $foto->ruta])); ?>"
                                         alt="Placeholder image">
                                </figure>
                            </div>
                            <footer class="card-footer">
                                <a href="<?php echo e(route("fotoDeArticulo", ["nombre" => $foto->ruta])); ?>" target="_blank"
                                   class="card-footer-item">Ampliar</a>
                                <a @click="eliminar('<?php echo e($foto->ruta); ?>')" class="card-footer-item">Eliminar</a>
                                <a href="<?php echo e(route("descargarFotoDeArticulo", ["nombre" => $foto->ruta])); ?>"
                                   class="card-footer-item">Descargar</a>
                            </footer>
                        </div>
                    </div>
                    
                    <?php if(($loop->iteration % $mostrarPorFila === 0 && $loop->iteration !== 0) || ($loop->last && $loop->count % $mostrarPorFila !== 0)): ?>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="columns">
                <div class="column">
                    <h1 class="is-size-1">No hay fotos</h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="<?php echo e(url("/js/articulos/fotos.js?q=") . time()); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Sistema_inventario_laravel\administracion_inventario\resources\views/articulos/fotos.blade.php ENDPATH**/ ?>