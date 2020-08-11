<?php
include_once 'core\BaseController.php';
include_once 'models\Beneficiario.class.php';
include_once 'models\InformacionInstitucional.class.php';
include_once 'models\TipoPoblacion.class.php';
include_once 'models\GrupoEtario.class.php';
include_once 'models\PertenenciaEtnica.class.php';
include_once 'models\EstructuraFamiliar.class.php';
include_once 'models\ProgramasSociales.class.php';
include_once 'models\Educacion.class.php';
include_once 'models\SeguridadSocial.class.php';
include_once 'models\ProveedorEconomico.class.php';
include_once 'models\SeguridadAlimentaria.class.php';
include_once 'models\UbicacionVivienda.class.php';

class BeneficiarioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }
    public function index()
    {
        $beneficiario = new Beneficiario();
        $beneficiarios = $beneficiario->all();
        $currentView = 'views\beneficiario\index.php';
        require_once 'views/layouts/' . $this->layout;
    }
    public function create()
    {
        $typeForm = isset($_GET['type_form']) ? $_GET['type_form'] : '';
        $documento = isset($_GET['id']) ? $_GET['id'] : '';


        switch ($typeForm) {
            case 'datos_institucionales':
                $currentView = 'views\beneficiario\forms\datos_institucionales.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'datos_poblacionales':
                $currentView = 'views\beneficiario\forms\datos_poblacionales.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'estructura_familiar':
                $currentView = 'views\beneficiario\forms\estructura_familiar.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'programas_sociales':
                $currentView = 'views\beneficiario\forms\programas_sociales.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'educacion':
                $currentView = 'views\beneficiario\forms\educacion.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'seguridad_social':
                $currentView = 'views\beneficiario\forms\seguridad_social.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'principal_proveedor':
                $currentView = 'views\beneficiario\forms\principal_proveedor.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'seguridad_alimentaria':
                $currentView = 'views\beneficiario\forms\seguridad_alimentaria.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            case 'ubicacion_condiciones_vivienda':
                $currentView = 'views\beneficiario\forms\ubicacion_condiciones_vivienda.php';
                require_once 'views/layouts/' . $this->layout;
                break;
            default:
                $currentView = 'views\beneficiario\create.php';
                require_once 'views/layouts/' . $this->layout;
                break;
        }
        // Retorna la vista de del formulario
    }
    public function store()
    {
        $typeForm = $_POST['type_form'];
        switch ($typeForm) {
            case 'datos_generales':
                var_dump($_POST);
                $primer_nombre = isset($_POST['primer_nombre']) ? $_POST['primer_nombre'] : "";
                $segundo_nombre = isset($_POST['segundo_nombre']) ? $_POST['segundo_nombre'] : "";
                $primer_apellido = isset($_POST['primer_apellido']) ? $_POST['primer_apellido'] : "";
                $segundo_apellido = isset($_POST['segundo_apellido']) ? $_POST['segundo_apellido'] : "";
                $tipo_documento = isset($_POST['tipo_documento']) ? $_POST['tipo_documento'] : "";
                $numero_documento = isset($_POST['numero_documento']) ? $_POST['numero_documento'] : "";
                $estado_civil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : "";
                $beneficiario = new Beneficiario();
                $fecha_inscripcion = date('Y-m-d');
                $beneficiario->informacionGeneral(
                    $primer_nombre,
                    $segundo_nombre,
                    $primer_apellido,
                    $segundo_apellido,
                    $tipo_documento,
                    $numero_documento,
                    $estado_civil,
                    $fecha_inscripcion
                );
                // Guarda la informacion general en la base de datos
                $beneficiario->saveInformacionGeneral();
                header('Location: index.php?controller=Beneficiario&action=create&id=' . $numero_documento . '&type_form=datos_institucionales');

                break;
            case 'datos_institucionales':
                print_r($_POST);
                $documento = isset($_POST['documento'])?$_POST['documento']:'';
                $pais_nacimiento = isset($_POST['pais_nacimiento']) ? $_POST['pais_nacimiento'] : "";
                $lugar_nacimiento = isset($_POST['lugar_nacimiento']) ? $_POST['lugar_nacimiento'] : "";
                $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : "";
                $nacimiento_termino = isset($_POST['nacimiento_termino']) ? $_POST['nacimiento_termino'] : "";
                $cantidad_meses = isset($_POST['cantidad_meses']) ? $_POST['cantidad_meses'] : "";
                $parentesco_familiar = isset($_POST['parentesco_familiar']) ? $_POST['parentesco_familiar'] : "";
                $tipologia_familiar = isset($_POST['tipologia_familiar']) ? $_POST['tipologia_familiar'] : "";
                $poblacion_desplazada = isset($_POST['poblacion_desplazada']) ? $_POST['poblacion_desplazada'] : "";
                $victima_otro_tipo_violencia = isset($_POST['victima_otro_tipo_violencia']) ? $_POST['victima_otro_tipo_violencia'] : "";
                $cual_violencia = isset($_POST['cual_violencia']) ? $_POST['cual_violencia'] : "";
                $peso_ingreso = isset($_POST['peso_ingreso']) ? $_POST['peso_ingreso'] : "";
                $talla_ingreso = isset($_POST['talla_ingreso']) ? $_POST['talla_ingreso'] : "";
                $estado_nutricional = isset($_POST['estado_nutricional']) ? $_POST['estado_nutricional'] : "";
                $acepta_uso_informacion = isset($_POST['acepta_uso_informacion']) ? $_POST['acepta_uso_informacion'] : "";

                $beneficiario = new Beneficiario();
                $beneficiario->informacionInstitucional(
                    $documento,
                    $pais_nacimiento,
                    $lugar_nacimiento,
                    $fecha_nacimiento,
                    $nacimiento_termino,
                    $cantidad_meses,
                    $parentesco_familiar,
                    $tipologia_familiar,
                    $poblacion_desplazada,
                    $victima_otro_tipo_violencia,
                    $cual_violencia,
                    $peso_ingreso,
                    $talla_ingreso,
                    $estado_nutricional,
                    $acepta_uso_informacion
                );
                $beneficiario->saveInformacionInstitucional();
                header('Location: index.php?controller=Beneficiario&action=');
                
                break;
            case 'datos_poblacionales':
                var_dump($_POST);
                // Id del beneficiario
                $pertenencia_etnica = isset($_POST['pertenencia_etnica']) ? $_POST['pertenencia_etnica'] : "";
                $grupo_etario = isset($_POST['grupo_etario']) ? $_POST['grupo_etario'] : "";
                $tipo_poblacion = isset($_POST['tipo_poblacion']) ? $_POST['tipo_poblacion'] : "";
                break;
            case 'datos_estructura_familiar':
                var_dump($_POST);
                $nombre_estructura = isset($_POST['nombre_estructura']) ? $_POST['nombre_estructura'] : "";
                $parentesco_estructura = isset($_POST['parentesco_estructura']) ? $_POST['parentesco_estructura'] : "";
                $edad_parentesco = isset($_POST['edad_parentesco']) ? $_POST['edad_parentesco'] : "";

                break;
            case 'datos_programas_sociales':
                var_dump($_POST);
                $inscrito_otro_programa_social = isset($_POST['inscrito_otro_programa_social']) ? $_POST['inscrito_otro_programa_social'] : "";
                $programa_social_inscrito = isset($_POST['programa_social_inscrito']) ? $_POST['programa_social_inscrito'] : "";
                $inscrito_otro_programa_social = isset($_POST['inscrito_otro_programa_social']) ? $_POST['inscrito_otro_programa_social'] : "";
                $que_tipo_subsidio = isset($_POST['que_tipo_subsidio']) ? $_POST['que_tipo_subsidio'] : "";
                $ingresos_recibidos = isset($_POST['ingresos_recibidos']) ? $_POST['ingresos_recibidos'] : "";

                break;
            case 'datos_educacion':
                var_dump($_POST);
                $sabe_leer_escribir = isset($_POST['sabe_leer_escribir']) ? $_POST['sabe_leer_escribir'] : "";
                $nivel_educativo = isset($_POST['nivel_educativo']) ? $_POST['nivel_educativo'] : "";
                $estudia_actualmente = isset($_POST['estudia_actualmente']) ? $_POST['estudia_actualmente'] : "";
                $grado_que_cursa = isset($_POST['grado_que_cursa']) ? $_POST['grado_que_cursa'] : "";
                $jornada_estudio = isset($_POST['jornada_estudio']) ? $_POST['jornada_estudio'] : "";
                $realiza_algun_curso = isset($_POST['realiza_algun_curso']) ? $_POST['realiza_algun_curso'] : "";
                $que_curso_realiza = isset($_POST['que_curso_realiza']) ? $_POST['que_curso_realiza'] : "";

                break;
            case 'datos_seguridad_social':
                var_dump($_POST);
                $nombre_eps = isset($_POST['nombre_eps']) ? $_POST['nombre_eps'] : "";
                $tipo_afiliacion = isset($_POST['tipo_afiliacion']) ? $_POST['tipo_afiliacion'] : "";
                $tiene_sisben = isset($_POST['tiene_sisben']) ? $_POST['tiene_sisben'] : "";
                $puntaje_sisben = isset($_POST['puntaje_sisben']) ? $_POST['puntaje_sisben'] : "";
                $regimen_seguridad_social = isset($_POST['regimen_seguridad_social']) ? $_POST['regimen_seguridad_social'] : "";
                $diversidad_funcional = isset($_POST['diversidad_funcional']) ? $_POST['diversidad_funcional'] : "";

                break;
            case 'datos_seguridad_alimentaria':
                var_dump($_POST);
                $obtencion_preparacion_alimentos = isset($_POST['obtencion_preparacion_alimentos']) ? $_POST['obtencion_preparacion_alimentos'] : "";
                $cantidad_comidas_dia = isset($_POST['cantidad_comidas_dia']) ? $_POST['cantidad_comidas_dia'] : "";
                $tuvo_reducir_comida = isset($_POST['tuvo_reducir_comida']) ? $_POST['tuvo_reducir_comida'] : "";
                $causa = isset($_POST['causa']) ? $_POST['causa'] : "";
                $granos = isset($_POST['granos']) ? $_POST['granos'] : "";
                $frutas_verduras = isset($_POST['frutas_verduras']) ? $_POST['frutas_verduras'] : "";
                $lacteos = isset($_POST['lacteos']) ? $_POST['lacteos'] : "";
                $carnes = isset($_POST['carnes']) ? $_POST['carnes'] : "";
                $huevos = isset($_POST['huevos']) ? $_POST['huevos'] : "";
                $quien_prepara_alimentos = isset($_POST['quien_prepara_alimentos']) ? $_POST['quien_prepara_alimentos'] : "";

                break;
            case 'datos_proveedor_economico':
                var_dump($_POST);
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
                $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : "";
                $lugar_labora = isset($_POST['lugar_labora']) ? $_POST['lugar_labora'] : "";
                $ingresos = isset($_POST['ingresos']) ? $_POST['ingresos'] : "";
                $egresos = isset($_POST['egresos']) ? $_POST['egresos'] : "";

                break;
            case 'datos_ubicacion_condiciones_vivienda':
                var_dump($_POST);
                $zona = isset($_POST['zona']) ? $_POST['zona'] : "";
                $vereda_barrio = isset($_POST['vereda_barrio']) ? $_POST['vereda_barrio'] : "";
                $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
                $telefono_fijo = isset($_POST['telefono_fijo']) ? $_POST['telefono_fijo'] : "";
                $telefono_celular = isset($_POST['telefono_celular']) ? $_POST['telefono_celular'] : "";
                $telefono_celular2 = isset($_POST['telefono_celular2']) ? $_POST['telefono_celular2'] : "";
                $estrato = isset($_POST['estrato']) ? $_POST['estrato'] : "";
                $tipo_vivienda = isset($_POST['tipo_vivienda']) ? $_POST['tipo_vivienda'] : "";
                $tenencia = isset($_POST['tenencia']) ? $_POST['tenencia'] : "";
                $material_estructura = isset($_POST['material_estructura']) ? $_POST['material_estructura'] : "";
                $material_suelo = isset($_POST['material_suelo']) ? $_POST['material_suelo'] : "";
                $servicios_publicos = isset($_POST['servicios_publicos']) ? $_POST['servicios_publicos'] : "";
                $cantidad_cuartos = isset($_POST['cantidad_cuartos']) ? $_POST['cantidad_cuartos'] : "";
                $servicio_sanitario = isset($_POST['servicio_sanitario']) ? $_POST['servicio_sanitario'] : "";

                break;
            case 'datos_menor_cinco_anos':
                break;
            case 'datos_gestante_lactante':
                break;
            default:
                echo "Formulario No encontrado";
                break;
        }
    }
    public function show($id)
    {
        // Retorna un dato especifico
    }
    public function edit($id)
    {
        // Retorna la informacion correspondiente al id y el formulario
    }
    public function update($request, $id)
    {
        //Recibe el id de un dato especifico y retorna el fomulario de edicion
    }
}
