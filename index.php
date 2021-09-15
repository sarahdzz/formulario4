<?php
include("conexion.php");

session_start();
if (isset($_SESSION['idusuario'])) {
    header("Location: admin.php");
}

//login
// if (!empty($_POST)) {
if (isset($_POST["entrar"])) {
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $clave = mysqli_real_escape_string($conexion, $_POST['clave']);
    $clave_encrip = md5($clave);
    $sql = "SELECT id_usuario FROM usuarios
       WHERE usuario = '$usuario' AND clave = '$clave_encrip' ";
    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if ($rows > 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['idusuario'] = $row["id_usuario"];
        header("Location: admin.php");
    } else {
        echo "<script>
        alert('usuario o contraseña incorrecta');
        window.location = 'index.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="usuario" placeholder="Usuario: " required> <br><br>
        <input type="password" name="clave" placeholder="Contraseña:" required> <br> <br>

        <button type="submit" name="entrar">entrar</button>


    </form>
</body>

</html>