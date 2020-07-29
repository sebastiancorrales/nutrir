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

class GrupoEtarioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }
    public function index()
    {
        $currentView = 'views/administration-panel/grupo-etario/index.php';
        require_once 'views/layouts/' . $this->layout;
    }
    public function create()
    {
        // Retorna la vista de del formulario
    }
    public function store()
    {
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
