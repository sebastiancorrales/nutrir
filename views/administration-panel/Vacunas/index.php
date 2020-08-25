<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">

                <h1 class="title-module">Vacunas</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nueva vacuna
                </button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($vacunas as $vacuna) {
                        ?>
                            <tr>
                                <th><?php echo $vacuna->id ?></th>
                                <td><?php echo strtoupper($vacuna->nombre) ?></td>
                                <td><?php echo strtolower($vacuna->descripcion)  ?></td>

                                <td>
                                    <a href="index.php?controller=Vacunas&action=edit&id=<?php echo $vacuna->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=Vacunas&action=show&id=<?php echo $vacuna->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=Vacunas&action=destroy&id=<?php echo $vacuna->id ?>" class="btn-options">Eliminar</a>
                                </td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'create.php';
?>