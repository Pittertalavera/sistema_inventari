<?php $__env->startSection("titulo", "Iniciar sesión"); ?>
<?php $__env->startSection("contenido"); ?>
    <style>
        @import  "https://fonts.googleapis.com/css?family=Open+Sans:300,400,700";

        html, body {
            font-family: 'Open Sans', serif;
            font-size: 14px;
            font-weight: 300;
        }

        .hero.is-success {
            background: #F2F6FA;
        }

        .hero .nav, .hero.is-success .nav {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .box {
            margin-top: 5rem;
        }

        .avatar {
            margin-top: -70px;
            padding-bottom: 20px;
        }

        .avatar img {
            padding: 5px;
            background: #fff;
            border-radius: 50%;
            -webkit-box-shadow: 0 2px 3px rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .1);
            box-shadow: 0 2px 3px rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .1);
        }

        input {
            font-weight: 300;
        }

        p {
            font-weight: 700;
        }

        p.subtitle {
            padding-top: 1rem;
        }
    </style>
    <section class="hero is-success is-fullheight" id="app">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Bienvenido </h3>
                    <p class="subtitle has-text-grey">Inicia sesión</p>
                    <?php echo $__env->make("errores", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="box">
                        <figure class="avatar" style="padding: 0">
                            <img style="width: 130px;" src="<?php echo e(url("/img/logo-cuadrado.jpg")); ?>">
                        </figure>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="field">
                                <div class="control">
                                    <input required class="input is-large" type="text"
                                           placeholder="Usuario" name="nombre"
                                           autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input required class="input is-large" type="password" name="password"
                                           placeholder="Contraseña">
                                </div>
                            </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input name="remember" type="checkbox">
                                    Recordarme
                                </label>
                            </div>

                            <button type="submit" class="button is-block is-info is-large is-fullwidth">Ingresar
                            </button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        Si no tienes una cuenta, pide a los administradores que te registren
                    </p>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Sistema_inventario_laravel\administracion_inventario\resources\views/auth/login.blade.php ENDPATH**/ ?>