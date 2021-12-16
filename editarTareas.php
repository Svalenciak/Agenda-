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
                    <form class=" row g-3" method="POST" action="editarProcesoTareas.php">
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