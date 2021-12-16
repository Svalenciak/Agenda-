<?php 

// print_r(($_POST));
   if (!isset($_POST['oculto'])) {
    header('Location: index.php');      
}

include 'conexion.php';
   $id = $_POST['txtid'];
   $txt2fechaLimite =  $_POST['txt2fechaLimite'];
   $txt2Tarea =  $_POST['txt2Tarea'];
   $txt2Comentario =  $_POST['txt2Comentario'];
   
   
   $sentencia = $bd->prepare("UPDATE tareas SET CodPro = ?, fechaLimite = ?, nomtarea = ?, comentario = ? WHERE id = ?;");
   $resultado = $sentencia->execute([$txt2fechaLimite,$txt2Tarea,$txt2Comentario,$id]);
  
   if ($resultado === TRUE ){
      header('location:index.php');
   }else{
       echo "Error";
  }

?>