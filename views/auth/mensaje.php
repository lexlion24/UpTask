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
    <div class="contenedor mensaje">
        <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>
        <div class="contenedor-sm">
            <p class="descripcion-paginas">Hemos enviado las instrucciones para confirmar tu cuenta a tu email</p>
        </div><!--.contenedor-sm -->
    </div>
</body>

</html>