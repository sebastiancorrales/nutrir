<div class="container">
    <section class="datos-institucionales">
        <div class="form">
            <h1>Datos Institucionales</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_institucionales">
                <input type="hidden" name="documento" value="<?php echo $documento?>">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="pais_nacimiento" placeholder="Pais de Nacimiento" require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Lugar de Nacimiento" require>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Feha de Nacimiento" require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="nacimiento_termino" placeholder="Nacimiento a Termino" require>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="cantidad_meses" placeholder="¿Cuántos Meses?" require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                    <select class="custom-select" name="parentesco_familiar" id="parentesco">
                            <option value="madre">Madre</option>
                            <option value="hijo">Hijo</option>
                            <option value="hermano-a">Hermano-a</option>
                            <option value="primo-a">Primo-a</option>
                            <option value="tio-a">Tio-a</option>
                            <option value="sobrino-a">Sobrino-a</option>
                            <option value="Abuela">Abuela</option>
                            <option value="Nieto">Nieto</option>
                            <option value="otra">Otra</option>
                            <option value="no aplica">No aplica</option>
                            <!-- mas datos -->
                        </select>
                    </div>

                    <div class="col">
                        <select class="custom-select" name="tipologia_familiar" id="tipologia_familiar">
                            <option value="compuesta">Compuesta</option>
                            <option value="Nuclear">Nuclear</option>
                            <option value="Monoparental * JF">Monoparental * JF</option>
                            <option value="Monoparental * JM">Monoparental * JM</option>
                            <option value="Simultanea">Simultanea</option>
                            <!-- mas datos -->
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label>Población Desplazada</label>
                        Si<input type="radio" name="poblacion_desplazada" value="SI">
                        No<input type="radio" name="poblacion_desplazada" value="NO">
                    </div>
                    <div class="col">
                        <label for="parentesco">¿Victima de Otro tipo de Violencia</label>
                        Si<input type="radio" name="victima_otro_tipo_violencia" value="SI">
                        No<input type="radio" name="victima_otro_tipo_violencia" value="NO">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="cual_violencia" placeholder="¿Cuál?">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <div class="row">
                            <input class="form-control" type="number" name="peso_ingreso" placeholder="Peso al Ingreso">
                        </div>
                        <div class="row">
                            <input class="form-control" type="number" name="talla_ingreso" placeholder="Talla al Ingreso">
                        </div>
                    </div>
                    <div class="col">
                        <textarea class="form-control" name="estado_nutricional" id="estado_nutricional" cols="30" rows="5" placeholder="Estado nutricional del beneficiario"></textarea>
                    </div>
                </div>
                <label for="acepta_uso_informacion">Acepta el uso y manejo de la informacion</label><br>
                <input type="checkbox" name="acepta_uso_informacion" id="acepta_uso_informacion" value="SI">
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
</div>