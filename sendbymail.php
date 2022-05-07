<?php
require "Pagina-contacto.php";

$errores = '';
$enviado ='';

if(isset($_POST['submit'])) {
    $nombre=$_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];


//comprobamos el nombre
    if (!empty($nombre)) {//si hay contenido en nombre ejecutamos
        $nombre= trim($nombre); //ejecuta trim y obvia los espacios vacios
    }   else{
        $errores .='Por favor introduce tu nombre <br />' ;
    }

//comprobamos el correo
    if (!empty($correo)) { //si hay contenido en correo ejecutamos
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); //la funcion sanea el correo y evbita los caracteres especiales

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {//esta funcion valida el correo y obtenemos false si no lo valida
            $errores .= 'Por favor introduce un correo valido <br />';

        }else{
            $errores .='Por favor introduce un correo <br />';
            
        }
    }
    //comprobamos si existe contenido en el mensaje
    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje); //elimina los espaciados que tengamos al principio y al final
        $mensaje = stripslashes($mensaje);
    }  else{
        $errores .='Por favor introduzca el mensaje <br />';
    }  

    //Comprobamos si hay errores

    if(!$errores){
        $enviar_a = 'ameleror@gmail.com'; // email temporal aqui irá la info que el usuario rellene. Ira en un foturo el email de empresa
        $asunto = 'Correo enviado Sweeteners';
        $mensaje_preparado = "De:  $nombre  \n";//estamos preparando el mensaje que queremos enviar
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje; //concatenamos desde el mensaje anterior para crear el mensaje completo

        //mail($enviar_a, $asunto, $mensaje_preparado);//con localhost no funciona. Los archivos han de subir a un hosting para que funcione
        $enviado = 'true';
    }

}
    

