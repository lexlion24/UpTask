<?php
//para ir iterando entre cada uno de los mensajes de error o exito
foreach ($alertas as $key => $alerta) :
    foreach ($alerta as $mensaje) :

?>
        <div class="alerta <?php echo $key; ?>"><?php echo $mensaje; ?></div>
<?php
    endforeach;
endforeach;
?>