<div class="container">
    <div class="row">
        <div class="module-items-row">

            <h1 class="title-module">Editar grupo Etario</h1>
            <form action="index.php?controller=GrupoEtario&action=update&id=<?php echo $id ?>" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $grupo->nombre ?>" require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $grupo->nombre ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-5">Guardar</button>
            </form>
        </div>
    </div>
</div>
