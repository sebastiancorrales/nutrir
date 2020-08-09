<section class="seguridad_alimenataria">
    <div class="form">
        <h1>Seguridad Alimentaria</h1>
        <form action="index.php?controller=beneficiario&action=store" method="POST">
            <input type="hidden" name="type_form" value="datos_seguridad_alimentaria">
            <div class="form-row">
                <div class="col-8">
                    <label for="">¿De dónde obtiene el agua para el consumo y preparación de los alimentos</label>
                    <select class="custom-select" name="obtencion_preparacion_alimentos" id="">
                        <option value="">Select</option>
                        <option value="">Select</option>
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="">Cantidad de comidas que consume al dia</label>
                    <select class="custom-select" name="cantidad_comidas_dia" id="">
                        <option value="">Sele</option>
                        <option value="">Sele</option>
                        <option value="">Sele</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="">Tuvo que reducir las porciones de comida el último mes</label>
                    <select class="custom-select" name="tuvo_reducir_comida" id="">
                        <option value="">Sele</option>
                        <option value="">Sele</option>
                        <option value="">Sele</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="">¿Cuál fue la causa?</label>
                    <select class="custom-select" name="causa" id="">
                        <option value="">Sele</option>
                        <option value="">Sele</option>
                        <option value="">Sele</option>
                    </select>
                </div>
            </div>
            <label for="">Frecuencia de consumo de los siguientes alimentos</label>
            <div class="form-row">
                <div class="col">
                    <label for="">Granos</label>
                    <select class="custom-select" name="granos" id="">
                        <option value="si">SI</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Frutas Verduras</label>
                    <select class="custom-select" name="frutas_verduras" id="">
                        <option value="si">SI</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Lacteos</label>
                    <select class="custom-select" name="lacteos" id="">
                        <option value="si">SI</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Carnes</label>
                    <select class="custom-select" name="carnes" id="">
                        <option value="si">SI</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Huevos</label>
                    <select class="custom-select" name="huevos" id="">
                        <option value="si">SI</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="">¿Quién prepara los alimentos en el hogar?</label>
                    <select class="custom-select" name="quien_prepara_alimentos" id="">
                        <option value="si">Sele</option>
                        <option value="no">selec</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-sm btn-success" value="Guardar">
        </form>
    </div>
</section>