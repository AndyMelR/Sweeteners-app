<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
    /*incluir la conexion de la bbdd*/
include_once("conexionpago.php");

if(isset($_POST['Submit'])) {   
  $cantidad = mysqli_real_escape_string($mysqli, $_POST['nombre']);
    $fecha = mysqli_real_escape_string($mysqli, $_POST['direccion']);
    $texto = mysqli_real_escape_string($mysqli, $_POST['codigo']);
    $texto = mysqli_real_escape_string($mysqli, $_POST['correo']);  
    $texto = mysqli_real_escape_string($mysqli, $_POST['provincia']);   
    $texto = mysqli_real_escape_string($mysqli, $_POST['ciudad']);
    $texto = mysqli_real_escape_string($mysqli, $_POST['numbero']);  
    $texto = mysqli_real_escape_string($mysqli, $_POST['fehca']);
    $texto = mysqli_real_escape_string($mysqli, $_POST['cve']);
   


    if(empty($nombre) || empty($direccion) || empty($codigo) || empty($correo)|| empty($provincia)|| empty($ciudad) 
    || empty($numbero) || empty($fecha) || empty($cve) ) {
        /*si estan vacios los espacios*/        
        if(empty($nombre)) {
            echo "<font color='red'>El nombre y apellidos está vacio.</font><br/>";
        }
        
        if(empty($direccion)) {
            echo "<font color='red'>La dirección está vacia.</font><br/>";
        }
        
        if(empty($codigo)) {
            echo "<font color='red'>El codigo postal está vacio.</font><br/>";
        }
        if(empty($correo)) {
            echo "<font color='red'>El correo está vacio.</font><br/>";
        }
        if(empty($provincia)) {
            echo "<font color='red'>La provincia está vacia.</font><br/>";
        }
        if(empty($ciudad)) {
            echo "<font color='red'>La ciudad está vacio.</font><br/>";
        }
        if(empty($number)) {
            echo "<font color='red'>El número de la tarjeta está vacio.</font><br/>";
        }
        if(empty($date)) {
            echo "<font color='red'>La fecha está vacia.</font><br/>";
        }
        if(empty($cve)) {
            echo "<font color='red'>El cve está vacio.</font><br/>";
        } 
    } 

    else { 
        /*si no estan  vacios*/
            
        //Añadir la bbdd    
        $resultado = mysqli_query($mysqli, "INSERT INTO users(nombre, direccion,codigo,corrreo,provincia,
        ciudad,numero,fecha,cve) VALUES('$nombre','$direccion','$codigo','$correo','$provincia','$ciudad',
        '$numero','$fecha','$cve');
        
        /*mensaje para usuarios*/
        echo "<font color='green'>La información ha sido añadida.";
        echo "<br/><a href='index.html'>View Result</a>"

    }

}