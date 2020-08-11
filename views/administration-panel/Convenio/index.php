<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">
                <br>
                <h1 class="title-module">Convenios</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nuevo Convenio
                </button>
                <br><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($Convenios as $Convenio) {
                        ?>
                            <tr>
                                <th scope="col"><?php echo $Convenio->id ?></th>
                                <td scope="col"><?php echo strtoupper($Convenio->nombre) ?></td>
                                <td scope="col"><?php echo strtolower($Convenio->descripcion)?></td>

                                <td>
                                    <a href="index.php?controller=Convenio&action=edit&id=<?php echo $Convenio->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=Convenio&action=show&id=<?php echo $Convenio->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=Convenio&action=destroy&id=<?php echo $Convenio->id ?>" class="btn-options">Eliminar</a>
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