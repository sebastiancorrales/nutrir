<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">

                <h1 class="title-module">Diversidad Funcional</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nueva diversidad funcional
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
                            foreach ($diversidades as $diversidad) {
                        ?>
                            <tr>
                                <th><?php echo $diversidad->id ?></th>
                                <td><?php echo strtoupper($diversidad->nombre) ?></td>
                                <td><?php echo strtolower($diversidad->descripcion)  ?></td>

                                <td>
                                    <a href="index.php?controller=DiversidadFuncional&action=edit&id=<?php echo $diversidad->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=DiversidadFuncional&action=show&id=<?php echo $diversidad->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=DiversidadFuncional&action=destroy&id=<?php echo $diversidad->id ?>" class="btn-options">Eliminar</a>
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