<div class="container">
    <section class="educacion">
        <h1>Educación</h1>
        <div class="form">
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_educacion">
                <div class="form-row">
                    <div class="col">
                        <label for="sabe_leer_escribir">¿Sabe leer y escribir?</label>
                        <select class="custom-select" name="sabe_leer_escribir" id="sabe_leer_escribir">
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="nivel_educativo">¿Nivel Educativo?</label>
                        <select class="custom-select" name="nivel_educativo" id="nivel_educativo">
                            <option value="">Sele</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="estudia_actualmente">¿Estudia Actualmente?</label>
                        <select class="custom-select" name="estudia_actualmente" id="estudia_actualmente">
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="grado_que_cursa">Grado que cursa actualmente</label>
                        <select class="custom-select" name="grado_que_cursa" id="grado_que_cursa">
                            <option value="1">1°</option>
                            <option value="2">2°</option>
                            <option value="3">3°</option>
                            <option value="4">4°</option>
                            <option value="5">5°</option>
                            <option value="6">6°</option>
                            <option value="7">7°</option>
                            <option value="8">8°</option>
                            <option value="9">9°</option>
                            <option value="10">10°</option>
                            <option value="11">11°</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="jornada_estudio">Jornada de estudio</label>
                        <select class="custom-select" name="jornada_estudio" id="jornada_estudio">
                            <option value="mañana">mañana</option>
                            <option value="tarde">tarde</option>
                            <option value="noche">noche</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="realiza_algun_curso">Realiza algún curso actualmente</label>
                        <select class="custom-select" name="realiza_algun_curso" id="realiza_algun_curso">
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for=""> ¿Cuál?</label>
                        <input class="form-control" type="text" name="que_curso_realiza" placeholder="¿Cuál?">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
</div>