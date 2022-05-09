<html>
<head>
    <title></title>
</head>

<body>
<?php


    /*incluir la conexion de la bbdd*/
include_once("conexionregistro.php");

if(isset($_POST['Submit'])) {   
    $name = mysqli_real_escape_string($mysqli, $_POST['Nombre']);
    $age = mysqli_real_escape_string($mysqli, $_POST['correo']);
    $email = mysqli_real_escape_string($mysqli, $_POST['password']);

    if(empty($Nombre) || empty($correo) || empty($password)) {
        /*si estan vacios los espacios*/        
        if(empty($Nombre)) {
            echo "<font color='red'>El nombre está vacio.</font><br/>";
        }
        
        if(empty($correo)) {
            echo "<font color='red'>El correo está vacio.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>La contraseña está vacia.</font><br/>";
        }
        
    } else { 
        /*si no estan  vacios*/
            
        //Añadir la bbdd    
        $resultado = mysqli_query($mysqli, "INSERT INTO users(Nombre,correo,password) VALUES('$Nombre','$correo','$password')");
        
        /*mensaje para usuarios*/
        echo "<font color='green'>La información ha sido añadida.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}