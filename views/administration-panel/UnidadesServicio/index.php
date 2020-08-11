<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">
                <br>
                <h1 class="title-module">Unidades de Servicios</h1>
                <button type="button" class="btn btn-create mt-2 mb-2" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i>
                    Crear nueva Unidad
                </button>
                <br><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <!-- <th scope="col">Departamento</th>
                            <th scope="col">Municipio</th> -->
                            <th scope="col">Direccion</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($USS as $US) {
                        ?>
                            <tr>
                                <th scope="col"><?php echo $US->id ?></th>
                                <td scope="col"><?php echo strtoupper($US->nombre) ?></td>
                                <!-- <td scope="col"><?php echo strtolower($US->departamento)  ?></td>
                                <td scope="col"><?php echo strtolower($US->municipio)?></td> -->
                                <td scope="col"><?php echo strtolower($US->direccion)?></td>

                                <td>
                                    <a href="index.php?controller=Unidadservicio&action=edit&id=<?php echo $US->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=Unidadservicio&action=show&id=<?php echo $US->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=Unidadservicio&action=destroy&id=<?php echo $US->id ?>" class="btn-options">Eliminar</a>
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