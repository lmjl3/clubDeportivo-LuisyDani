<?php
	//Establezco conexión
	require 'conexion.php';
	
	//Preparo la sentencia SQL
    $sql = "SELECT * FROM clubdeportivo";

	//Ejecuto la sentencia y guardo el resultado
    $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Club Deportivo La Venta</title>
		
		<script>
			$(document).ready( function () {
				$('#tabla').DataTable();
			} );
		</script>
</head>
<body>
    
</body>
</html>