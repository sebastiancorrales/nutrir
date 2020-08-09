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
                            <option value="">Sele</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="grupo_etario">grupo Etario</label>
                        <select class="custom-select" name="grupo_etario" id="grupo_etario">
                            <option value="">Sele</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="tipo_poblacion">Tipo Población</label>
                        <select class="custom-select" name="tipo_poblacion" id="tipo_poblacion">
                            <option value="">Sele</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-sm btn-success">
            </form>
        </div>
    </section>

</div>