<?php 
   if (isset($_POST['oculto'])){
       exit();
   }
   include 'conexion.php';
   $fechaIngreso =  $_POST['txtfechaIngreso'];
   $nomProyecto =  $_POST['txtnomProyecto'];   
   $fechaEntrega =  $_POST['txtfechaEntrega'];
   $descripcion =  $_POST['txtdescripcion'];

   $sentencia = $bd->prepare("INSERT INTO proyectos(fechaIngreso,nomProyecto,fechaEntrega,descripcion) values(?,?,?,?);");
   $resultado = $sentencia->execute([$fechaIngreso,$nomProyecto,$fechaEntrega,$descripcion]);

   if ($resultado === TRUE){
      header('location:index.php');
   }else{
       echo "Error";
   }
   
