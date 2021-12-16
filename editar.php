<?php
// session_start();
// if (!isset($_GET['id'])) {
//     header('Location: index.php');
// }
// if (!isset($_SESSION['nombre'])) {
//     header('location: login.php');
// } elseif (isset($_SESSION['nombre'])) {
include 'conexion.php';
$id = $_GET['id'];
$sentencia = $bd->prepare("SELECT * FROM proyectos WHERE id = ?;");
$sentencia->execute([$id]);
$agenda = $sentencia->fetch(PDO::FETCH_OBJ);

// } else {
//     echo "Error en el Sistema
//      <br>
//      Comunicate con el Administrador";
// }


// --------------------------  cabecera de la pagina ---------------------------------------

include './estructura/cabecera.php';

?>


<body>
    <form class=" row g-3" method="POST" action="editarProceso.php">
        <h5>Editar</h5>

        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Fecha Ingreso</label>
            <input type="date" name="txt2echaIngreso" value="<?php echo $agenda->fechaIngreso; ?>" required>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Nombre del Proyecto</label>
            <input type="text" name="txt2nomProyecto" style="width : 300px; heigth : 300px" value="<?php echo $agenda->nomProyecto; ?>" required>
        </div>
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Fecha de Entrega</label>
            <input type="date" name="txt2fechaEntrega" value="<?php echo $agenda->fechaEntrega; ?>" required>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Descripcion del Proyecto</label>
            <input type="text" style="width : 600px; heigth : 600px" name="txt2descripcion" value="<?php echo $agenda->descripcion; ?>" required></td>
        </div>
        <div class="col-md-3">
            <input type="hidden" name="oculto">
            <input type="hidden" name="id2" value="<?php echo $agenda->id; ?>"></td>
            <td colspan="2"><button class="btn btn-primary" onclick="location='index.php'">INICIO</button></td>
            <td colspan="2"><input type="submit" class="btn btn-secondary btn-sm ml-auto" value="EDITAR"></td>
            
        </div>
    </form>

    <!------------------------------------ Acordeon para ingreso de Tareas--------------------------------------------->


    <br>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p>Listar Tareas</p>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background: rgb(236, 236, 235)">
                    <form class=" row g-3" method="POST" action="insertarTareas.php">
                        <div class="col-md-2" style="display: none;">
                            <label for="validationCustom01" class="form-label">Id</label>
                            <input type="text" name="txtid" value="<?php echo $id ?>" required>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom01" class="form-label">Fecha Limite</label>
                            <input type="date" name="txtfechaLimite" required>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">Tarea Pendientes</label>
                            <input type="text" name="txtTarea" style="width : 300px;" required>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom01" class="form-label">Comentario</label>
                            <input type="text" name="txtComentario" style="width : 850px;" required>
                        </div>

                        
                            <imput type="hidden" name="oculto" value="1">
                            <td><input type="submit" class="btn btn-secondary btn-sm ml-auto" value="INGRESAR"></td>
                        
                </div>
            </div>
        </div>
        <!------------------------------------ Hasta aqui Acordeon para ingreso de Tareas--------------------------------------------->

        <?php

        $sentancia = $bd->query("SELECT id,fechaLimite,nomtarea,comentario FROM tareas WHERE CodPro= $id;");
        $datosTareas = $sentancia->fetchAll(PDO::FETCH_OBJ);

        ?>
        <br>
        <table id="" class="table table-striped table-bordered border border-2" style="width:100%">
            <h5 Style="text-align:center">Tareas</h5>
            <tr>
                <td>ID</td>
                <td>FECHA LIMITE</td>
                <td>TAREA</td>
                <td>COMENTARIOS</td>                
                <td>EDITAR</td>
                <td>ELIMINAR</td>
            </tr>
            <?php
            foreach ($datosTareas as $item) {
            ?>
                <tr>
                    <td> <?php echo $item->id; ?> </td>
                    <td> <?php echo $item->fechaLimite; ?> </td>
                    <td> <?php echo $item->nomtarea; ?> </td>
                    <td> <?php echo $item->comentario; ?> </td>
                    <td><a class="btn btn-secondary" href="">Editar</a></td>
                    <td><a class="btn btn-danger" href="eliminarTareas.php?id=<?php echo $item->id; ?>">Eliminar</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <hr>


    </div>

</body>

<?php
include("./estructura/footer.php")
?>

</html>