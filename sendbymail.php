<?php

$errores = '';
$enviado ='';

if(isset($_POST['submit'])) {
    $nombre=$_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {//si hay contenido en nombre ejecutamos
        $nombre= trim($nombre); //ejecuta trim y obvia los espacios vacios
    }   else{
        $errores .='Por favor introduce tu nombre <br />' ;
    }
    if (!empty($correo)) { //si hay contenido en correo ejecutamos
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); //la funcion sanea el correo y evbita los caracteres especiales

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {//esta funcion valida el correo y obtenemos false si no lo valida
            $errores .= 'Por favor introduce un correo valido <br />';

        }else{
            $errores .='Por favor introduce un correo <br />';
            
        }


    }
}
    

