<?php 

// print_r(($_POST));
   if (!isset($_POST['oculto'])) {
    header('Location: index.php');      
}

include 'conexion.php';

   $id = $_POST['id2'];
   $fechaIngreso2 =  $_POST['txt2echaIngreso'];
   $nomProyecto2 =  $_POST['txt2nomProyecto'];
   $fechaEntrega2 =  $_POST['txt2fechaEntrega'];
   $descripcion2 =  $_POST['txt2descripcion'];
   
   
   $sentencia = $bd->prepare("UPDATE proyectos SET fechaIngreso = ?, nomProyecto = ?, fechaEntrega = ?, descripcion = ? WHERE id = ?;");
   $resultado = $sentencia->execute([$fechaIngreso2,$nomProyecto2,$fechaEntrega2,$descripcion2,$id]);
  
   if ($resultado === TRUE ){
      header('location:index.php');
   }else{
       echo "Error";
  }

?>