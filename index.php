<?php
//session_start();
//if (!isset($_SESSION['nombre'])) {
//    header('location: login.php');
//} elseif (isset($_SESSION['nombre'])) {
include './conexion.php';
$sentancia = $bd->query("SELECT * FROM proyectos;");
$datos = $sentancia->fetchAll(PDO::FETCH_OBJ);
//} else {
// echo "Error en el Sistema
//  <br>
//  Comunicate con el Administrador";
//}

include './estructura/cabecera.php';

?>

<body>
    <form class=" row g-3" method="POST" action="insertar.php">
        <h5>Agendar</h5>
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Fecha Ingreso</label>
            <input type="date" name="txtfechaIngreso" required>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Nombre del Proyecto</label>
            <input type="text" name="txtnomProyecto" style="width : 300px;" required>
        </div>
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Fecha de Entrega</label>
            <input type="date" name="txtfechaEntrega" required>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Descripcion del Proyecto</label>
            <input type="text" style="width : 600px;" name="txtdescripcion" required></td>
        </div>
        <div class="col-md-3">
            <imput type="hidden" name="oculto" value="1">
                <td><input type="submit" class="btn btn-secondary btn-sm ml-auto" value="INGRESAR"></td>
        </div>

        

            <div>
                <table id="agenda" class="table table-striped table-bordered border border-2" style="width:100%">
                    <h5 Style="text-align:center">Proyectos</h5>
                    <tr>
                        <td>ID</td>
                        <td>FECHA INGRESO</td>
                        <td>NOMBRE PROYECTO</td>
                        <td>FECHA ENTREGA </td>
                        <td>DESCRIPCION</td>
                        <td>TAREAS</td>
                        <td>ELIMINAR</td>
                    </tr>
                    <?php
                    foreach ($datos as $item) {
                    ?>
                        <tr>
                            <td> <?php echo $item->id; ?> </td>
                            <td> <?php echo $item->fechaIngreso; ?> </td>
                            <td> <?php echo $item->nomProyecto; ?> </td>
                            <td> <?php echo $item->fechaEntrega; ?> </td>
                            <td> <?php echo $item->descripcion; ?> </td>
                            <td><a class="btn btn-secondary" href="editar.php?id=<?php echo $item->id; ?>">Tareas</a></td>
                            <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $item->id; ?>">Eliminar</a></td>
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