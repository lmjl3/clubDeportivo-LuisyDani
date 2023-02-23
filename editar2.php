<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $categoria = $_POST['categoria'];

        //Establezco conexión
			require 'conexion.php';

			//Preparo la sentencia SQL
			$sql = "UPDATE clubdeportivo SET nombre='$nombre', telefono='$telefono', fecha_nacimiento='$fecha', categoria='$categoria' WHERE id=$id";

			//Ejecutamos sentencia y guardamos resultado
			$resultado = $mysqli->query($sql);
            if($resultado>0){
                ?>
                        <br>
                        <p class="alert alert-primary">REGISTRO MODIFICADO</p>
                <?php
                    } else {
                ?>
                        <br>
                          <p class="alert alert-danger">REGISTRO NO MODIFICADO</p>
                <?php
                    }
                ?>
                    <br>
    ?>
</body>
</html>