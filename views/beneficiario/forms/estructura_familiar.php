<div class="container">
    <section class="estructura_familiar">
        <div class="form">
            <h1>Estructura Familiar</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_estructura_familiar">
                <input type="hidden" name="documento" value="<?php echo $documento ?>">
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre_estructura" placeholder="Nombre/Apellido">
                    </div>
                    <div class="col">
                        <label for="parentesco_estructura">Parentesco Familiar</label>
                        <select class="custom-select" name="parentesco_estructura" id="parentesco_estructura">
                            <option value="">-SELECCIONE-</option>
                            <option value="Madre">Madre</option>
                            <option value="Hijo-a">Hijo-a</option>
                            <option value="Hermano-a">Hermano-a</option>
                            <option value="Primo-a">Primo-a</option>
                            <option value="Tio-a">Tio-a</option>
                            <option value="Abuelo-a">Abuelo-a</option>
                            <option value="Nieto-a">Nieto-a</option>
                            <option value="Otro">otro</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                        <input type="date" class="form-control" name="fecha_nacimiento" placeholder="fecha de nacimiento">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>

</div>