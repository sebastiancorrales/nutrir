<div class="container">
    <div class="card p-4 detail">
        <div class="card-header">
            <h4><?php echo $vacuna->nombre; ?></h4>
            <a href="index.php?controller=Vacunas&action=edit&id=<?php echo $vacuna->id ?>"> Editar </a>
        </div>
        <hr />
        <ul class="list-unstyled">
            <li class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><i class="fa fa-check-circle"></i> Nombre</h5>
                    <?php echo $vacuna->nombre; ?>
                </div>
            </li>
            <li class="media my-4">
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><i class="fa fa-check-circle"></i>Descripción</h5>
                    <?php echo $vacuna->descripcion; ?>
                </div>
            </li>
        </ul>
    </div>
</div>