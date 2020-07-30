<div class="container">
    <div class="row">
        <div class="module-items-row">

            <h1 class="title-module">Grupo Etario</h1>
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
                                <a href="">Editar</a>
                                <a href="">Detalle</a>
                                <a href="">Eliminar</a>
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