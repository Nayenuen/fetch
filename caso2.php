<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marvel";

//crear la conexion a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT nombre, apellidos FROM empleados";
$result = mysqli_query($conn, $sql);

$contador = 0;

if($result){
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo ++ $contador;
            echo "nombre:" . $row["nombre"]. "<br>", "apellidos:" . $row["apellidos"]. "<br>";
        }
    }
}

?>