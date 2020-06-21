<link rel="stylesheet" href="css\form-benficiario.css">
<div class="container-sm">
 <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                aria-valuemax="2">
            </div>
        </div>
        <div class="option-control">
            <div class="row">
                <div class="col">
                    <button class=" mx-auto btn btn-sm btn-info" id="atras" type="button">&laquo;</button>
                </div>
                <div class="col">
                <button class="mx-auto btn btn-sm btn-info" id="adelante" type="button">&raquo;</button>
                </div>
            </div>
        </div>
    <section class="datos-generales">
        <div class="form">

            <h1>Datos Generales</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_generales">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="primer_nombre" placeholder="Primer Nombre"
                            require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="segundo_nombre" placeholder="segundo_nombre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="primer_apellido" placeholder="Primer Apellido"
                            require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="segundo_apellido" placeholder="Segundo Apellido">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <select class="custom-select" name="tipo_documento" id="tipo_documento">
                            <option value="CC">Cédula de Ciudadania</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CE">Cedula de Extranjería</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">N° Documento</label>
                        <input class="form-control" type="number" name="numero_documento" placeholder="124545184">
                    </div>
                    <div class="col">
                        <label for="genero">Genero</label>
                        <select class="custom-select" name="genero" id="genero">
                            <option value="FEMENINO">Femenino</option>
                            <option value="MASCULINO">Masculino</option>
                            <option value="OTRO">Otro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Estado Civil</label>
                        <select class="custom-select" name="estado_civil" id="">
                            <option value="SOLTERO">Soltero</option>
                            <option value="CASADO">Casad</option>
                            <option value="OTRO">Otro</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="my-auto btn btn-sm btn-success"> Guardar </button>
            </form>
        </div>
    </section>

    <section class="datos-institucionales">

        <div class="form">
            <h1>Datos Institucionales</h1>
        <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_institucionales">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="pais_nacimiento" placeholder="Pais de Nacimiento"
                            require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="lugar_nacimiento"
                            placeholder="Lugar de Nacimiento" require>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Feha de Nacimiento"
                            require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="nacimiento_termino"
                            placeholder="Nacimiento a Termino" require>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="cantidad_meses" placeholder="¿Cuántos Meses?"
                            require>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <label for="parentesco">Parenteso con Otro Familiar</label><br>
                            Si<input type="radio" class="custom-control-radio" name="parentesco_familiar" value="SI">
                            No<input type="radio" class="custom-control-radio" name="parentesco_familiar" value="NO">
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="cual_parentesco" placeholder="¿Cuál?">
                    </div>
                    <div class="col">
                        <select class="custom-select" name="tipologia_familiar" id="tipologia_familiar">
                            <option value="compuesta">Compuesta</option>
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
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <div class="row">
                            <input class="form-control" type="number" name="peso_ingreso" placeholder="Peso al Ingreso">
                        </div>
                        <div class="row">
                            <input class="form-control" type="number" name="talla_ingreso"
                                placeholder="Talla al Ingreso">
                        </div>
                    </div>
                    <div class="col">
                        <textarea class="form-control" name="estado_nutricional" id="estado_nutricional" cols="30"
                            rows="5" placeholder="Estado nutricional del beneficiario"></textarea>
                    </div>
                </div>
                <label for="acepta_uso_informacion">Acepta el uso y manejo de la informacion</label><br>
                <input type="checkbox" name="acepta_uso_informacion" id="acepta_uso_informacion" value="SI">
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>

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

    <section class="estructura_familiar">
        <div class="form">
            <h1>Estructura Familiar</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_estructura_familiar">
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre_estructura" placeholder="Nombre/Apellido">
                    </div>
                    <div class="col">
                        <label for="parentesco_estructura">Parentesco Familiar</label>
                        <select class="custom-select" name="parentesco_estructura" id="parentesco_estructura">
                            <option value="">Sele</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                        <input type="number" class="form-control" name="edad_parentesco" placeholder="Edad">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>

    <section class="programas_sociales">
        <div class="form">
            <h1>Programas Sociales</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_programas_sociales">
                <div class="form-row">
                    <div class="col-3">
                        <label for="">¿Inscrito en otro programa social?</label>
                        <select class="custom-select" name="inscrito_otro_programa_social"
                            id="inscrito_otro_programa_social">
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="form-row">
            <div class="col-3">
                <input class="form-control" type="text" name="programa_social_inscrito"
                    placeholder="¿Qué programa social?">
            </div>
        </div>
        <div class="form-row">
            <div class="col-3">
                <label for="">¿Algún tipo de subsidio?</label>
                <select class="custom-select" name="inscrito_otro_programa_social" id="iscrito_otro_programa_social">
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col">
                <label for="">¿Qué subsidio?</label>
                <input class="form-control" type="text" name="que_tipo_subsidio" placeholder="¿Qué subsidio?">
            </div>
            <div class="col">
                <label for="">$ Ingresos recibidos</label>
                <input class="form-control" type="text" name="ingresos_recibidos" placeholder="$ Ingresos recibidos">
            </div>
            <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>

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
    <section class="principal_proveedor">
        <div class="form">
            <h1>Principal Proveedor Economico</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_proveedor_economico">
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="col">
                    <label for="">Ocupacion</label>
                        <input class="form-control" type="text" name="ocupacion" placeholder="Ocupacion">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                    <label for="">Lugar Donde Labora</label>
                        <input class="form-control" type="text" name="lugar_labora" placeholder="Lugar donde labora">
                    </div>
                    <div class="col">
                    <label for="">Ingresos SMLV</label>
                        <input class="form-control" type="text" name="ingresos" placeholder="Ingresos">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                    <label for="">Egresos SMLV</label>
                        <input class="form-control" type="text" name="egresos" placeholder="Egresos">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
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
    <section class="ubicacion-vivienda">
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
