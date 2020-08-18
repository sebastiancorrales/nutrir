<div class="container">
    <section class="datos_poblacionales">
        <div class="form">
            <h1>Datos Poblacionales</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_poblacionales">
                <div class="form-row">
                    <div class="col">
                        <label for="pertenencia_etnica">Pertenecia Étnica</label>
                        <select class="custom-select" name="pertenencia_etnica" id="pertenencia_etnica">
                            <?php
                            foreach ($pertenencias as $pertenencia) {
                            ?>
                                <option value="<?php echo $pertenencia->id?>"><?php echo $pertenencia->nombre?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="grupo_etario">grupo Etario</label>
                        <select class="custom-select" name="grupo_etario" id="grupo_etario">
                        <?php
                            foreach ($grupos as $grupo) {
                            ?>
                                <option value="<?php echo $grupo->id?>"><?php echo $grupo->nombre?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="tipo_poblacion">Tipo Población</label>
                        <select class="custom-select" name="tipo_poblacion" id="tipo_poblacion">
                        <?php
                            foreach ($tipos as $tipo) {
                            ?>
                                <option value="<?php echo $tipo->id?>"><?php echo $tipo->nombre?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $documento?>" name="documento">
                <input type="submit" value="Guardar" class="btn btn-sm btn-success">
            </form>
        </div>
    </section>

</div>