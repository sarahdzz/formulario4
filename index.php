<?php

$alert = '';
if (!empty($_POST)) {
    echo $alert = "click en ingresar";
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

    <form action="index.php" method="post">
        <h1>Inicir Sesion</h1>
        Usuario: <input type="text" name="usuario"> <br><br>
        Contraseña: <input type="password" name="clave"> <br> <br>
        <p class="alert"></p>
        <input type="submit" name="entrar" value="Entrar">


    </form>
</body>

</html>