<?php
	$id=$_GET['id'];
	//Establezco conexión
	require 'conexion.php';
	
	//Preparo la sentencia SQL
	$sql = "SELECT * FROM clubdeportivo WHERE id=$id";

	//Ejecuto la sentencia y guardo el resultado
	$resultado = $mysqli->query($sql);

	//Guardamos el registro obtenido en la variable $fila
	$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>