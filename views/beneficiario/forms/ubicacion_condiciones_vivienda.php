<div class="contaienr">
    <section class="ubicacion_vivienda">
        <h1>Ubicacion y condiciones de la vivienda</h1>
        <div class="form">
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_ubicacion_condiciones_vivienda">
                <div class="form-row">
                    <div class="col">
                        <label for="">Zona</label>
                        <select class="custom-select" name="zona" id="">
                            <option value="">Sele</option>
                            <option value="">selec</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Vereda/Barrio</label>
                        <select class="custom-select" name="vereda_barrio" id="">
                            <option value="">Sele</option>
                            <option value="">selec</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Dirección</label>
                        <input class="form-control" type="text" name="direccion">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Telefono Fijo</label>
                        <input class="form-control" type="text" name="telefono_fijo">
                    </div>
                    <div class="col">
                        <label for="">Celular</label>
                        <input class="form-control" type="number" name="telefono_celular">
                    </div>
                    <div class="col">
                        <label for="">Celular 2</label>
                        <input class="form-control" type="number" name="telefono_celular2">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Estrato Socioeconomico</label>
                        <select class="custom-select" name="estrato" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="">Tipo De Vivienda</label>
                        <select class="custom-select" name="tipo_vivienda" id="">
                            <option value="">Propia</option>
                            <option value="">Alquilada</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Tenencia</label>
                        <select class="custom-select" name="tenencia" id="">
                            <option value="">Propia</option>
                            <option value="">Alquilada</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Material Estructura</label>
                        <select class="custom-select" name="material_estructura" id="">
                            <option value="">Madera</option>
                            <option value="">Material pesado</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Material Suelo</label>
                        <select class="custom-select" name="material_suelo" id="">
                            <option value="">Madera</option>
                            <option value="">Material pesado</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Servicios Públicos</label>
                        <select class="custom-select" name="servicios_publicos" id="">
                            <option value="">Si</option>
                            <option value="">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">¿En cuántos cuartos duermen las personas de la vivienda?</label>
                        <input class="form-control" type="number" name="cantidad_cuartos">
                    </div>
                    <div class="col">
                        <label for="">¿Cuenta con servicio sanitario?</label>
                        <select class="custom-select" name="servicio_sanitario" id="">
                            <option value="">Si</option>
                            <option value="">No</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
</div>