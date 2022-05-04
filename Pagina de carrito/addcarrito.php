<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
    /*incluir la conexion de la bbdd*/
include_once("conexioncarrito.php");

if(isset($_POST['Submit'])) {	
	$cantidad = mysqli_real_escape_string($mysqli, $_POST['cantidad']);
	$fecha = mysqli_real_escape_string($mysqli, $_POST['fecha']);
	$texto = mysqli_real_escape_string($mysqli, $_POST['texto']);

	if(empty($cantidad) || empty($fecha) || empty($texto)) {
		/*si estan vacios los espacios*/		
		if(empty($cantidad)) {
			echo "<font color='red'>La cantidad esta vacio.</font><br/>";
		}
		
		if(empty($fecha)) {
			echo "<font color='red'>La fecha esta vacio.</font><br/>";
		}
		
		if(empty($texto)) {
			echo "<font color='red'>El texto esta vacio.</font><br/>";
		}
		
	} else { 
		/*si no estan  vacios*/
			
		//Añadir la bbdd	
		$resultado = mysqli_query($mysqli, "INSERT INTO users(cantidad,fecha,texto) VALUES('$cantidad','$fecha','$texto')");
		
		/*mensaje para usuarios*/
		echo "<font color='green'>La información ha sido añadida.";
		echo "<br/><a href='index.php'>View Result</a>";
            }
}
?>
</body>
</html>
