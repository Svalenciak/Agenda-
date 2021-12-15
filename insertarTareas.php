<?php 
   
   if (isset($_POST['oculto'])){
    exit();
}
    include 'conexion.php';   
    $id =  $_POST['txtid'];    
    $fechaLimite =  $_POST['txtfechaLimite'];
    $tarea =  $_POST['txtTarea'];   
    $comentario =  $_POST['txtComentario'];
    

    $sentencia = $bd->prepare("INSERT INTO tareas(CodPro,fechaLimite,nomtarea,comentario) values(?,?,?,?);");
    $resultado = $sentencia->execute([$id,$fechaLimite,$tarea,$comentario]);

    if ($resultado === TRUE){
    header('location:index.php');
    }else{
        echo "Error";
    }

?>