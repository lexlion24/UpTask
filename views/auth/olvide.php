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
    <div class="contenedor olvide">
        <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>
        <div class="contenedor-sm">
            <p class="descripcion-paginas">Recupera tu acceso a RuTime</p>
            <form class="formulario" method="post" action="/olvide">
                <div class="campo">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Tu email" />
                </div>
                <input type="submit" class="boton" value="Enviar Instrucciones" />
            </form>
            <div class="acciones">
                <a href="/">¿Ya tienes cuenta? Iniciar Sesion</a>
                <a href="/crear">¿No tienes cuenta? Obtener una</a>
            </div>
        </div><!--.contenedor-sm -->
    </div>
</body>

</html>