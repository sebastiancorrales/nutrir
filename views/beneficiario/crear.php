<section class="datos-generales">
    <div class="form">
    <h1>Datos Generales</h1>
        <form action="" method="POST">

            <input type="hidden" name="datos_generales" value="datos_generales">
            <input type="text" name="primer_nombre" placeholder="Primer Nombre">
            <input type="text" name="segundo_nombre" placeholder="segundo_nombre">
            <input type="text" name="primer_apellido" placeholder="segundo_apellido">

            <label for="tipo_documento">Tipo de Documento</label>
            <select name="tipo_documento" id="tipo_documento">
                <option value="CC">Cédula de Ciudadania</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="PASAPORTE">Pasaporte</option>
                <option value="CE">Cedula de Extranjería</option>
            </select>

            <label for="genero">Genero</label>
            <select name="genero" id="genero">
                <option value="FEMENINO">Femenino</option>
                <option value="MASCULINO">Masculino</option>
                <option value="OTRO">Otro</option>
            </select>

            <label for="genero">Estado Civil</label>
            <select name="genero" id="genero">
                <option value="SOLTERO">Soltero</option>
                <option value="CASADO">CASADO</option>
                <option value="OTRO">Otro</option>
            </select>
            <button type="submit"> Guardar </button>
        </form>
    </div>
</section>
<section class="datos-institucionales">
    <h1>Datos Institucionales</h1>
    <div class="form">
        <input type="text" name="pais_nacimiento" placeholder="Pais de Nacimiento" require>
        <input type="text" name="lugar_nacimiento" placeholder="Lugar de Nacimiento" require>
        <input type="date" name="fecha_nacimiento" placeholder="Feha de Nacimiento" require>
        <input type="text" name="nacimiento_termino" placeholder="Nacimiento a Termino" require>
        <input type="number" name="cantidad_meses" placeholder="¿Cuántos Meses?" require>

        <div>
            <label for="parentesco">Parenteso con Otro Familiar</label>
            Si<input type="radio" name="parentesco_familiar" value="SI">
            No<input type="radio" name="parentesco_familiar" value="NO">
        </div>
        <input type="text" name="cual_parentesco" placeholder="¿Cuál?">
        
        <!-- Tipologia Familiar -->
        <select name="tipologia_familiar" id="tipologia_familiar">
            <option value="compuesta">Compuesta</option>
            <!-- mas datos -->
        </select>

        <div>
            <label for="parentesco">Población Desplazada</label>
            <input type="radio" name="poblacion_desplazada" value="SI">
            <input type="radio" name="poblacion_desplazada" value="NO">
        </div>



    </div>
</section>
