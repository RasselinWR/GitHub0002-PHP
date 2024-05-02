<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peticiones de búsqueda</title>
</head>
<body>
    <?php
        include("conexion-PHP.php");
        $bus=$_GET["busqueda"];
        $conexion=mysqli_connect($BD_host,$BD_user,$BD_password,$BE_name);
        $consulta="SELECT* FROM ESTUDIANTES WHERE APELLIDOS='$bus'";
        $resultados=mysqli_query($conexion,$consulta);
        $fila=mysqli_fetch_row($resultados);
            echo "Nombre: ".$fila[1]."<br>Apellidos: ".$fila[2]."<br>Edad: ".$fila[3]." años";
    ?>
</body>
</html>