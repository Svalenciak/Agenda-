<?php 
    session_start();
    if (isset($_SESSION['nombre'])){
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div>
        <form method="POST" action="loginProceso.php">
            <label>Usuario: </label>
            <input type="text" name="txtUsuario">
            <br>
            <label>Password: </label>
            <input type="password" name="txtPassword">
            <br>
            <input type="submit" value="Iniciar Session">
        </form>
    </div>

</body>

</html>