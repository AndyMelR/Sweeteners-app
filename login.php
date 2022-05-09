<?php
//Iniciar la sesión y la conexion a la bd

if(isset($_SESSION['usuario'])){ //Si la sesion ya está activa redirigimos
    header('Location:index.html');
}

require_once 'includes_conexionlogin.php';
require 'login.html';

//Recoger los datos del formulario

$usuario = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

//Comprobar la contraseña/cifrar
$query = mysqli_query($mysqli, "SELECT * FROM login WHERE usuario = '".$usuario."' and password '".$pass."' ");

 //Almacenamos el numero de fila
$nr = mysqli_num_rows($query);

if ($nr==1) {
   header("Location:index.html");
   // echo "Bienvenido: " .$nombre;

}else if($nr==0){
    header("Location:login.html");
    echo " Error de inicio de sesion";
}
 


    









//Consulta para comprobar las credenciales del usuario

//Utilizar una sesion para guardar los datos del usuario logueado

//Si fallo enviar una sesion con el fallo

//redirigir al index


?>