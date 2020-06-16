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
        $currentView = 'views\beneficiario\crear.php';
        require_once 'views/layouts/' . $this->layout;        
    }
    public function create()
    {
        // Retorna la vista de del formulario
    }
    public function store($request, $typeForm)
    {
        switch (ucwords($typeForm)) {
            case 'datos_generales':
                break;
            case 'datos_institucionales':
                break;
            case 'datos_poblacionales':
                break;
            case 'datos_estructura_familiar':
                break;
            case 'datos_programas_sociales':
                break;
            case 'datos_educacion':
                break;
            case 'datos_seguridad_social':
                break;
            case 'datos_proveedor_economico':
                break;
            case 'datos_seguridad_alimentaria':
                break;
            case 'datos_ubicacion_condiciones_vivienda':
                break;
            case 'datos_menor_cinco_anos':
                break;
            case 'datos_gestante_lactante':
                break;
            default:
                echo "Error";
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
