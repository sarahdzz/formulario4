<?php
include("conexion.php");
session_start();
if (!isset($_SESSION['idusuario'])) {
    header("Location: index.php");
}

$id_user = $_SESSION['idusuario'];
$sql = "SELECT id_usuario, nombre FROM usuarios WHERE id_usuario='$id_user' ";
$empresas = " SELECT id_empresa, nombre, contacto FROM  empresas WHERE asignado='$id_user'";
$ciudad = "SELECT nombre, cp FROM ciudades WHERE ";


$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>

<body>
    <span>Bienvenido
        <?php echo utf8_decode($row○['nombre']); ?>
    </span>

    <button name="salir" href="salir.php">logout</button>




</body>

</html>