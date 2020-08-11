<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Creación de Programa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?controller=Unidadservicio&action=store" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Unidad 001" id="nombre"  require><br>
                        </div>
                    </div>
                    <!-- <div class="form-row">
                        <div class="col">
                            <label for="descripcion">Departamento</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="Descripción del programa 001" id="descripcion">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="descripcion">Municipio</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="Descripción del programa 001" id="descripcion">
                        </div>
                    </div> -->
                    <div class="form-row">
                        <div class="col">
                            <label for="descripcion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Dirección de la unidad 001" id="descripcion">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>