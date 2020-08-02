<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">

                <h1 class="title-module">Pertenencia Etnica</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nueva pertenencia etnica
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
                            foreach ($pertenencias as $pertenencia) {
                        ?>
                            <tr>
                                <th><?php echo $pertenencia->id ?></th>
                                <td><?php echo strtoupper($pertenencia->nombre) ?></td>
                                <td><?php echo strtolower($pertenencia->descripcion)  ?></td>

                                <td>
                                    <a href="index.php?controller=PertenenciaEtnica&action=edit&id=<?php echo $pertenencia->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=PertenenciaEtnica&action=show&id=<?php echo $pertenencia->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=PertenenciaEtnica&action=destroy&id=<?php echo $pertenencia->id ?>" class="btn-options">Eliminar</a>
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