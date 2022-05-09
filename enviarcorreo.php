<?php

$destino = "ameleror@hotmail.es";

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = "Envio desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre :" . $nombre . "\n" . "Correo :" . $correo . "\n" . "Mensaje :" . $mensaje ;

if ($_POST['submit']) {
    if (mail($destino, $mensajeCompleto, $header)) {
        echo 'El mensaje se ha enviado correctamente';
    } else {
        echo 'Fallo en el envío del mensaje';
    }
    header("Location:index.html");
}
?>