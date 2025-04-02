<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Lectura de base de datos</h3>
<h4>Bucle fetch_assoc</h4>  

<?php
include ("abre.php");
$consulta = "SELECT * FROM empleados";
$resultado = $conexion->query($consulta);
$a = 0;
while ($row = $resultado->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo ++$a; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellidos']; ?></td><br>
    </tr>
    <?php
}
?>
</body>
</html>