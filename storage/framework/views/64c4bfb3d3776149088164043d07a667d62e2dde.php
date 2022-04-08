<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent("titulo"); ?></title>
    <link rel="stylesheet" href="<?php echo e(url("/css/estilos.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(url("/css/all.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(url("/css/bulma.min.css")); ?>"/>
    <script type="text/javascript">
        const URL_BASE = "<?php echo e(url("/")); ?>",
            URL_BASE_API = "<?php echo e(url("/api")); ?>",
            TOKEN_CSRF = "<?php echo e(csrf_token()); ?>";
    </script>
    <script src="<?php echo e(url("/js/principal.js?q=") . time()); ?>"></script>
    <script src="<?php echo e(url("/js/wireframe.js?q=") . time()); ?>"></script>
    <script src="<?php echo e(url("/js/utiles.js")); ?>"></script>
    <script src="<?php echo e(url("/js/vue.js")); ?>"></script>
</head>

<body>
<?php if(Auth::check()): ?>
    <nav class="navbar is-transparent has-shadow is-spaced">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img class="logo" style="max-height: 100%;" src="<?php echo e(url("/img/logo.png")); ?>"
                     alt="Aquí el logotipo de la empresa"
                     width="150" height="20">
            </a>
            <div id="intercambiarMenu" class="navbar-burger burger" data-target="menuPrincipal">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="menuPrincipal" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="<?php echo e(route("areas")); ?>">
                    <span class="icon has-text-danger">
                        <i class="fa fa-home"></i>
                    </span>&nbsp;Categoría
                </a>
                <a class="navbar-item" href="<?php echo e(route("responsables")); ?>">
                    <span class="icon has-text-success">
                        <i class="fa fa-users"></i>
                    </span>&nbsp;Responsables
                </a>
                <a class="navbar-item" href="<?php echo e(route("articulos")); ?>">
                    <span class="icon has-text-info">
                        <i class="fa fa-box"></i>
                    </span>&nbsp;Productos
                </a>
                
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <a class="button"
                           href="<?php echo e(route("logout")); ?>">
                            <strong>Salir</strong>&nbsp;(<?php echo e(Auth::user()->nombre); ?>)
                            <span class="icon has-text-danger">
                                <i class="fa fa-sign-out-alt"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<?php endif; ?>
<section class="section" style="padding-top: 0.3rem;">
    <?php echo $__env->yieldContent("contenido"); ?>
</section>
</body>

</html>
<?php /**PATH C:\Sistema_inventario_laravel\administracion_inventario\resources\views/maestra.blade.php ENDPATH**/ ?>