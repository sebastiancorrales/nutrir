<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">
                <br>
                <h1 class="title-module">Editar Unidad</h1>
                <br>
                <form action="index.php?controller=Unidadservicio&action=update&id=<?php echo $id ?>" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control col-5" name="nombre" id="nombre" value="<?php echo $USS->nombre ?>" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <br>
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control col-5" name="direccion" id="direccion" value="<?php echo $USS->direccion ?>">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary ">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
