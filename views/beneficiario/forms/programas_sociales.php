<div class="container">
    <section class="programas_sociales">
        <div class="form">
            <h1>Programas Sociales</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_programas_sociales">
                <input type="hidden" name="documento" value="<?php echo $documento ?>">
                <div class="form-row">
                    <div class="col-3">
                        <label for="">¿Inscrito en otro programa social?</label>
                        <select class="custom-select" name="inscrito_otro_programa_social" id="inscrito_otro_programa_social">
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="form-row">
            <div class="col-3">
                <input class="form-control" type="text" name="programa_social_inscrito" placeholder="¿Qué programa social?">
            </div>
        </div>
        <div class="form-row">
            <div class="col-3">
                <label for="">¿Algún tipo de subsidio?</label>
                <select class="custom-select" name="algun_tipo_subsidio" id="iscrito_otro_programa_social">
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col">
                <label for="">¿Qué subsidio?</label>
                <input class="form-control" type="text" name="que_tipo_subsidio" placeholder="¿Qué subsidio?">
            </div>
            <div class="col">
                <label for="">$ Ingresos recibidos</label>
                <input class="form-control" type="text" name="ingresos_recibidos" placeholder="$ Ingresos recibidos">
            </div>
            <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>

</div>