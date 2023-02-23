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
    <title>Club Deportivo La Venta</title>
</head>
<body>
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-8">
            <form id="registro" name="registro" autocomplete="off" action="editar2.php" method="post">
						<!-- Incluir el id en algún div de estos-->
						<div class="form-group">
							<!-- Nombre  -->
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce el nombre" value="<?php echo $fila['nombre']; ?>" required>
						</div>

						<div class="form-group">
							<!-- Teléfono -->
							<label for="telefono">Teléfono</label>
							<input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Introduce el teléfono" value="<?php echo $fila['telefono']; ?>" required>
						</div>

						<div class="form-group">
							<!-- Fecha nacimiento -->
							<label for="fecha">Fecha de nacimiento</label>
							<input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $fila['fecha_nacimiento']; ?>" required>
						</div>
						
						<div class="form-group">
							<!-- Categoría -->
							<label for="categoria">Categoría</label>
							<select name="categoria" id="categoria" class="form-control" required>
								<option value="AMATEUR" <?php if($fila['categoria'] == 'AMATEUR'){echo "selected";} ?>>AMATEUR</option>
								<option value="PROFESIONAL" <?php if($fila['categoria'] == 'PROFESIONAL'){echo "selected";} ?>>PROFESIONAL</option>
							</select>
						</div>
						
						<div class="form-group">
							<!-- Editar -->
							<input type="submit" value="Editar" class="btn btn-primary">
						</div>
            </div>
        </div>
    </div>
</body>
</html>