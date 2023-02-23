<?php
	//Establezco conexión
	require 'conexion.php';
	
	//Preparo la sentencia SQL
    $sql = "SELECT * FROM clubdeportivo";

	//Ejecuto la sentencia y guardo el resultado
    $resultado = $mysqli->query($sql);
?>