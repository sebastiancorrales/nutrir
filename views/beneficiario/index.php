<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">

                <h1 class="title-module">Beneficiarios</h1>
                <a href="index.php?controller=Beneficiario&action=create" class="btn btn-create mt-2 mb-2" >
                    <i class="fas fa-plus"></i>
                    Crear nuevo beneficiario
                </a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">documento</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Programa</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($beneficiarios as $beneficiario) {
                        ?>
                            <tr>
                                <th><?php echo $beneficiario->numero_documento ?></th>
                                <th><?php echo $beneficiario->primer_nombre . ' ' . $beneficiario->segundo_nombre . ' ' . $beneficiario->primer_apellido . ' ' . $beneficiario->segundo_apellido ?></th>
                                <td>//</td>
                                <td>//</td>
                                <td><?php echo $beneficiario->estado; ?></td>

                                <td>
                                    <a href="index.php?controller=Beneficiario&action=edit&id=<?php echo $beneficiario->id ?>" class="btn-options">Editar </a>
                                    <a href="index.php?controller=Beneficiario&action=show&id=<?php echo $beneficiario->id ?>" class="btn-options">Detalle </a>
                                    <a href="index.php?controller=Beneficiario&action=destroy&id=<?php echo $beneficiario->id ?>" class="btn-options">Eliminar</a>
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