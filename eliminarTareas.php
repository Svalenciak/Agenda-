<?php 
   if (isset($_POST['oculto'])){
       exit();
   }
   $codigo = $_GET['id'];
   include 'conexion.php';   

   $sentencia = $bd->prepare("DELETE FROM tareas WHERE id = ?;");
   $resultado = $sentencia->execute([$codigo]);

   if ($resultado === TRUE){
      header('location:index.php');
   }else{
       echo "Error";
   }
?>