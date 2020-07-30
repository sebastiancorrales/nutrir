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
        $grupo_etario = new GrupoEtario();
        $grupos = $grupo_etario->all();
        $currentView = 'views/administration-panel/grupo-etario/index.php';
        require_once 'views/layouts/' . $this->layout;
    }
    public function create()
    {
        // Retorna la vista de del formulario
    }
    public function store()
    {

        if ($_POST['nombre']) {
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $descripcion = isset($_POST['descripcion']) ? strtolower($_POST['descripcion']) : null;
            $grupo_etario = new GrupoEtario($nombre, $descripcion);
            $grupo_etario->save();
            header('Location: index.php?controller=GrupoEtario&action=');
        } else {
            return "request invalid";
        }
    }
    public function show()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $grupo_etario = new GrupoEtario();
            $grupo = $grupo_etario->get($id);
            $currentView = 'views/administration-panel/grupo-etario/detail.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function edit()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $grupo_etario = new GrupoEtario();
            $grupo = $grupo_etario->get($id);
            $currentView = 'views/administration-panel/grupo-etario/edit.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function update()
    {
        if ($_POST['nombre']) {
            $id = $_GET['id'];
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $descripcion = isset($_POST['descripcion']) ? strtolower($_POST['descripcion']) : null;
            $grupo_etario = new GrupoEtario($nombre, $descripcion);
            $grupo_etario->update($id);
            header('Location: index.php?controller=GrupoEtario&action=');
        } else {
            return "request invalid";
        }
    }
    public function destroy()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $grupo_etario = new GrupoEtario();
            $grupo_etario->delete($id);
            header('Location: index.php?controller=GrupoEtario&action=');
        }
    }
}
