<div class="container">
    <div class="row">
        <div class="col">
            <div class="module-items-row">
                <br>
                <h1 class="title-module">Editar Convenio</h1>
                <br>
                <form action="index.php?controller=Convenio&action=update&id=<?php echo $id ?>" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control col-5" name="nombre" id="nombre" value="<?php echo $Convenios->nombre ?>" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <br>
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control col-5" name="descripcion" id="descripcion" value="<?php echo $Convenios->descripcion ?>">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary ">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
