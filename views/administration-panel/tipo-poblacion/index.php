<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">

                <h1 class="title-module">Tipo de población</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nuevo tipo de población
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
                            foreach ($tipos as $tipo) {
                        ?>
                            <tr>
                                <th><?php echo $tipo->id ?></th>
                                <td><?php echo strtoupper($tipo->nombre) ?></td>
                                <td><?php echo strtolower($tipo->descripcion)  ?></td>

                                <td>
                                    <a href="index.php?controller=TipoPoblacion&action=edit&id=<?php echo $tipo->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=TipoPoblacion&action=show&id=<?php echo $tipo->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=TipoPoblacion&action=destroy&id=<?php echo $tipo->id ?>" class="btn-options">Eliminar</a>
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