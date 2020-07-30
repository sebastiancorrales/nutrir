<div class="container">
    <div class="row">
        <div class="module-items-row">

            <h1 class="title-module">Grupo Etario</h1>
            <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-plus"></i>
                Crear nuevo grupo etario
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
                    foreach ($grupos as $grupo) {

                    ?>
                        <tr>
                            <th><?php echo $grupo->id ?></th>
                            <td><?php echo strtoupper($grupo->nombre) ?></td>
                            <td><?php echo strtolower($grupo->descripcion)  ?></td>

                            <td>
                                <a href="index.php?controller=GrupoEtario&action=edit&id=<?php echo $grupo->id ?>" class="btn-options">Editar </a>
                                <a href="index.php?controller=GrupoEtario&action=show&id=<?php echo $grupo->id ?>" class="btn-options">Detalle </a>
                                <a href="index.php?controller=GrupoEtario&action=destroy&id=<?php echo $grupo->id ?>" class="btn-options">Eliminar</a>
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
<?php
require_once 'create.php';
?>