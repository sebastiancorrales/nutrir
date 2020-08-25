<div class="container">

    <section class="seguridad_alimenataria">
        <div class="form">
            <h1>Seguridad Alimentaria</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_seguridad_alimentaria">
                <input type="hidden" name="documento" value="<?php echo $documento ?>">
                <div class="form-row">
                    <div class="col-8">
                        <label for="">¿De dónde obtiene el agua para el consumo y preparación de los alimentos</label>
                        <select class="custom-select" name="obtencion_preparacion_alimentos" id="">
                            <option value="Acueducto público">Acueducto público</option>
                            <option value="Acueducto veredal">Acueducto veredal</option>
                            <option value="Poza con bomba">Poza con bomba</option>
                            <option value="Poza sin bomba o jaguey">Poza sin bomba o jaguey</option>
                            <option value="Agua lluvia">Agua lluvia</option>
                            <option value="Rio, quebrada, manantial o nacimiento">Rio, quebrada, manantial o nacimiento</option>
                            <option value="Pila pública">Pila pública</option>
                            <option value="Carrotanque">Carrotanque</option>
                            <option value="Aguatero">Aguatero</option>
                            <option value="Agua embotellada o en bolsa">Agua embotellada o en bolsa</option>
                            <option value="Otra">Otra</option>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Cantidad de comidas que consume al dia</label>
                        <select class="custom-select" name="cantidad_comidas_dia" id="">
                            <option value="Una">Una</option>
                            <option value="Dos">Dos</option>
                            <option value="Tres">Tres</option>
                            <option value="Mas de tres">Mas de tres</option>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Tuvo que reducir las porciones de comida el último mes</label>
                        <select class="custom-select" name="tuvo_reducir_comida" id="">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">¿Cuál fue la causa?</label>
                        <select class="custom-select" name="causa" id="">
                            <option value="Situación económica">Situacion económica</option>
                            <option value="Situación de salud">Situación de salud</option>
                        </select>
                    </div>
                </div>
                <label for="">Frecuencia de consumo de los siguientes alimentos</label>
                <div class="form-row">
                    <div class="col">
                        <label for="">Granos</label>
                        <select class="custom-select" name="granos" id="">
                            <option value="Diario">Diario</option>
                            <option value="Cada tercer dia">Cada tercer dia</option>
                            <option value="Una vez a la semana">Una vez a la semana</option>
                            <option value="Una vez cada 15 días">Una vez cada 15 días</option>
                            <option value="Una vez al mes">Una vez al mes</option>
                            <option value="Casi nunca">Casi nunca</option>
                            <option value="Nunca">Nunca</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Frutas Verduras</label>
                        <select class="custom-select" name="frutas_verduras" id="">
                            <option value="Diario">Diario</option>
                            <option value="Cada tercer dia">Cada tercer dia</option>
                            <option value="Una vez a la semana">Una vez a la semana</option>
                            <option value="Una vez cada 15 días">Una vez cada 15 días</option>
                            <option value="Una vez al mes">Una vez al mes</option>
                            <option value="Casi nunca">Casi nunca</option>
                            <option value="Nunca">Nunca</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Lacteos</label>
                        <select class="custom-select" name="lacteos" id="">
                            <option value="Diario">Diario</option>
                            <option value="Cada tercer dia">Cada tercer dia</option>
                            <option value="Una vez a la semana">Una vez a la semana</option>
                            <option value="Una vez cada 15 días">Una vez cada 15 días</option>
                            <option value="Una vez al mes">Una vez al mes</option>
                            <option value="Casi nunca">Casi nunca</option>
                            <option value="Nunca">Nunca</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Carnes</label>
                        <select class="custom-select" name="carnes" id="">
                            <option value="Diario">Diario</option>
                            <option value="Cada tercer dia">Cada tercer dia</option>
                            <option value="Una vez a la semana">Una vez a la semana</option>
                            <option value="Una vez cada 15 días">Una vez cada 15 días</option>
                            <option value="Una vez al mes">Una vez al mes</option>
                            <option value="Casi nunca">Casi nunca</option>
                            <option value="Nunca">Nunca</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Huevos</label>
                        <select class="custom-select" name="huevos" id="">
                            <option value="Diario">Diario</option>
                            <option value="Cada tercer dia">Cada tercer dia</option>
                            <option value="Una vez a la semana">Una vez a la semana</option>
                            <option value="Una vez cada 15 días">Una vez cada 15 días</option>
                            <option value="Una vez al mes">Una vez al mes</option>
                            <option value="Casi nunca">Casi nunca</option>
                            <option value="Nunca">Nunca</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">¿Quién prepara los alimentos en el hogar?</label>
                        <input type="text" name="quien_prepara_alimentos" class="form-control">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
</div>