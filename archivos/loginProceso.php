<?php 
  //  print_r($_POST);
      session_start();
      include_once 'conexion.php';

      $usuario = $_POST['txtUsuario'];
      $pass = $_POST['txtPassword'];
      $sentencia = $bd->prepare('SELECT * FROM usuario WHERE  nombre = ? AND passw = ?;');
      $sentencia->execute([$usuario,$pass]);
      $resul = $sentencia->fetch(PDO::FETCH_OBJ);

      if ($resul === FALSE){
        header('location:login.php');
     }elseif($sentencia->rowCount() == 1){
         $_SESSION['nombre'] = $resul->nombre; 
         header('location:index.php');
     }

?>