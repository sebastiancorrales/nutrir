<div class="container">
    <div class="card p-4 detail">
        <div class="card-header">
            <h4><?php echo strtoupper($USS->nombre); ?></h4>
            <a href="index.php?controller=Unidadservicio&action=edit&id=<?php echo $USS->id ?>"> Editar </a>
        </div>
        <hr />
        <ul class="list-unstyled">
            <li class="media">

                <div class="media-body">

                    <h5 class="mt-0 mb-1"><i class="fa fa-check-circle"></i> Nombre</h5>
                    <?php echo $USS->nombre; ?>
                </div>
            </li>
            <li class="media my-4">
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><i class="fa fa-check-circle"></i>Dirección</h5>
                    <?php echo $USS->direccion; ?>
                </div>
            </li>
        </ul>
    </div>
</div>