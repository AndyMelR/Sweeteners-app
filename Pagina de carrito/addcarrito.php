<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
    /*incluir la conexion de la bbdd*/
include_once("config.php");

if(isset($_POST['Submit'])) {   
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);