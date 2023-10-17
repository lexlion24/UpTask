<!-- tiene una fuente diferente porque en layout.php tnemos una fuente de google y en scss/base_tipografia -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- esta clase ya esta registrada en los globales y tenemos otro contenedor de 70rm -->
    <div class="contenedor crear">
        <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>
        <div class="contenedor-sm">
            <p class="descripcion-paginas">Crea tu cuenta en UpTask</p>
            <form class="formulario" method="post" action="/">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" />
                </div>
                <div class="campo">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Tu email" />
                </div>
                <div class="campo">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="campo">
                    <label for="password2">Repetir Password</label>
                    <input type="password" name="password2" id="password2" placeholder="repite tu Password" />
                </div>
                <input type="submit" class="boton" value="Iniciar Sesion" />
            </form>
            <div class="acciones">
                <a href="/">¿Ya tienes cuenta? Iniciar Sesion</a>
                <a href="/olvide">¿Olvidaste tu password?</a>
            </div>
        </div><!--.contenedor-sm -->
    </div>
</body>

</html>