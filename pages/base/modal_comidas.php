<div class="modal fade" id="modal<?php echo $row['Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row["Nombre"] ?> <span class="badge bg-danger">Eliminar</span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro que desea eliminar el plato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button>
                <a href="../php/eliminar_comida.php?id=<?php echo $row["Id"] ?>" class="btn btn-dark">Aceptar</a>
            </div>
        </div>
    </div>
</div>