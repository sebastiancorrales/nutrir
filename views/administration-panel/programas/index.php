<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">
                <br>
                <h1 class="title-module">Programas</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nuevo Programa    
                </button>
                <br><br>
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
                            foreach ($programas as $programa) {
                        ?>
                            <tr>
                                <th scope="col"><?php echo $programa->id ?></th>
                                <td scope="col"><?php echo strtoupper($programa->nombre) ?></td>
                                <td scope="col"><?php echo strtolower($programa->descripcion)  ?></td>

                                <td>
                                    <a href="index.php?controller=Programas&action=edit&id=<?php echo $programa->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=Programas&action=show&id=<?php echo $programa->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=Programas&action=destroy&id=<?php echo $programa->id ?>" class="btn-options">Eliminar</a>
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