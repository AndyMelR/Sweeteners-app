<?php

$destino = "ameleror@hotmail.es";

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = "Envio desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre :" . $nombre . "\n" . "Correo :" . $correo . "\n" . "Mensaje :" . $mensaje ;

mail($destino, $mensajeCompleto, $header);
header('Location:Pagina-contacto.html');


?>