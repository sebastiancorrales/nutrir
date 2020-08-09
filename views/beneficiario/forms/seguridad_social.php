<div class="container">

    <section class="seguridad-social">
        <div class="form">
            <h1>Seguridad Social</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_seguridad_social">
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre de la EPS</label>
                        <input class="form-control" type="text" name="nombre_eps" placeholder="Nombre de la EPS">
                    </div>
                    <div class="col">
                        <label for="tipo_afiliacion">Tipo de Afiliación</label>
                        <select class="custom-select" name="tipo_afiliacion" id="tipo_afiliacion">
                            <option value="subsidiado">Subsidiado</option>
                            <option value="contributivo">contributivo</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="tiene_sisben">Tiene Sisben</label>
                        <select class="custom-select" name="tiene_sisben" id="tiene_sisben">
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="puntaje_sisben">Puntaje Sisben</label>
                        <select class="custom-select" name="puntaje_sisben" id="puntaje_sisben">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="regimen_seguridad_social">Regimen de Seguridad Social</label>
                        <select class="custom-select" name="regimen_seguridad_social" id="regimen_seguridad_social">
                            <option value="subsidiado">Subsidiado</option>
                            <option value="contributivo">contributivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="diversidad_funcional">Diversidad Funcional</label>
                        <select class="custom-select" name="diversidad_funcional" id="diversidad_funcional">
                            <option value="subsidiado">Si</option>
                            <option value="contributivo">No</option>
                            <option value="MoreOptions">MoreOptiones</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
</div>