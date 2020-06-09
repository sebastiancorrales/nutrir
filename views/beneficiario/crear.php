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
            Si<input type="radio" name="poblacion_desplazada" value="SI">
            No<input type="radio" name="poblacion_desplazada" value="NO">
        </div>
        <div>
            <label for="parentesco">¿Victima de Otro tipo de Violencia</label>
            Si<input type="radio" name="victima_otro_tipo_violencia" value="SI">
            No<input type="radio" name="victima_otro_tipo_violencia" value="NO">
        </div>

        <input type="number" name="peso_ingreso" placeholder="Peso al Ingreso">
        <input type="number" name="peso_ingreso" placeholder="Talla al Ingreso">

        <textarea name="estado_nutricional" id="estado_nutricional" cols="30" rows="5"
            placeholder="Estado nutricional del beneficiario"></textarea>
        <label for="acepta_uso_informacion">Acepta el uso y manejo de la informacion</label>
        <input type="checkbox" name="acepta_uso_informacion" id="acepta_uso_informacion" value="SI">
    </div>
</section>

<section class="datos_poblacionales">
    <h1>Datos Poblacionales</h1>
    <label for="pertenencia_etnica">Pertenecia Étnica</label>
    <select name="pertenencia_etnica" id="pertenencia_etnica">
        <option value="">Sele</option>
    </select>

    <label for="grupo_etario">grupo Etario</label>
    <select name="grupo_etario" id="grupo_etario">
        <option value="">Sele</option>
    </select>

    <label for="tipo_poblacion">Tipo Población</label>
    <select name="tipo_poblacion" id="tipo_poblacion">
        <option value="">Sele</option>
    </select>

</section>

<section class="estructura_familiar">
    <h1>Estructura Familiar</h1>
    <div>
        <label for="">Nombre Completo</label>
        <input type="text" value="nombre_estructura">
        <label for="parentesco_estructura">Parentesco Familiar</label>
        <select name="parentesco_estructura" id="parentesco_estructura">
            <option value="">Sele</option>
        </select>
        <input type="number" name="edad_parentesco" placeholder="Edad">
    </div>
</section>

<section class="programas_sociales">
    <h1>Programas Sociales</h1>

    <label for="">¿Inscrito en otro programa social?</label>
    <select name="iscrito_otro_programa_social" id="iscrito_otro_programa_social">
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>
    <input type="text" name="programa_social_inscrito" placeholder="¿Qué programa social?">

    <label for="">¿Algún tipo de subsidio?</label>
    <select name="iscrito_otro_programa_social" id="iscrito_otro_programa_social">
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>
    <input type="text" name="que_tipo_subsidio" placeholder="¿Algún tipo de subsidio?">
    <input type="text" name="ingresos_recibidos" placeholder="$ Ingresos recibidos">
</section>

<section class="educacion">
    <h1>Educación</h1>

    <label for="sabe_leer_escribir">¿Sabe leer y escribir?</label>
    <select name="sabe_leer_escribir" id="sabe_leer_escribir">
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>

    <label for="nivel_educativo">¿Nivel Educativo?</label>
    <select name="nivel_educativo" id="nivel_educativo">
        <option value="">Sele</option>
    </select>

    <label for="estidia_actualmente">¿Estudia Actualmente?</label>
    <select name="estidia_actualmente" id="estidia_actualmente">
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>

    <label for="estidia_actualmente">Grado que cursa actualmente</label>
    <select name="estidia_actualmente" id="estidia_actualmente">
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

    <label for="jornada_estudio">Jornada de estudio</label>
    <select name="jornada_estudio" id="jornada_estudio">
        <option value="mañana">mañana</option>
        <option value="tarde">tarde</option>
        <option value="noche">noche</option>
    </select>

    <label for="realiza_algun_curso">Realiza algún curso actualmente</label>
    <select name="realiza_algun_curso" id="realiza_algun_curso">
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>
    <input type="text" name="que_curso_realiza" placeholder="¿Cuál?">
</section>

<section class="seguridad-social">
    <h1>Seguridad Social</h1>

    <input type="text" name="nombre_eps" placeholder="Nombre de la EPS">

    <label for="tipo_afiliacion">Tipo de Afiliación</label>
    <select name="tipo_afiliacion" id="tipo_afiliacion">
        <option value="subsidiado">Subsidiado</option>
        <option value="contributivo">contributivo</option>
    </select>

    <label for="tiene_sisben">Tiene Sisben</label>
    <select name="tiene_sisben" id="tiene_sisben">
        <option value="SI">Si</option>
        <option value="NO">No</option>
    </select>

    <label for="puntaje_sisben">Puntaje Sisben</label>
    <select name="puntaje_sisben" id="puntaje_sisben">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>

    
    <label for="tipo_afiliacion">Regimen de Seguridad Social</label>
    <select name="tipo_afiliacion" id="tipo_afiliacion">
        <option value="subsidiado">Subsidiado</option>
        <option value="contributivo">contributivo</option>
    </select>



</section>