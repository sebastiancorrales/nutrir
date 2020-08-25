<?php
include_once 'core\BaseController.php';
include_once 'models\Programa.class.php';
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
include_once 'models\UnidadServicio.class.php';
include_once 'models\Convenio.class.php';
include_once 'models\Vacuna.class.php';

class VacunaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }

    public function index()
    {
        $vacuna = new Vacuna();
        $vacunas = $vacuna->all();
        $currentView = 'views/administration-panel/Vacunas/index.php';
        require_once 'views/layouts/' . $this->layout;
    }
    public function create()
    {
        //Devuelve la vista de crear
    }

    public function store()
    {
        if ($_POST['nombre']) {
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $direccion = isset($_POST['descripcion']) ? strtolower($_POST['descripcion']) : null;
            $Vacuna = new Vacuna($nombre,$direccion);
            $Vacuna->save();
            header('Location: index.php?controller=Vacunas&action=index');
        } else {
            return "request invalid";
        }
    }

    public function show()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $Vacuna = new Vacuna();
            $vacuna = $Vacuna->get($id);
            $currentView = 'views/administration-panel/Vacunas/detail.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function edit()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $Vacuna = new Vacuna();
            $vacuna = $Vacuna->get($id);
            $currentView = 'views/administration-panel/Vacunas/edit.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function update()
    {
        if ($_POST['nombre']) {
            $id = $_GET['id'];
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $direccion = isset($_POST['descripcion']) ? strtolower($_POST['descripcion']) : null;
            $Vacunas = new Vacuna($nombre, $direccion);
            $Vacunas->update($id);
            header('Location: index.php?controller=Vacunas&action=index');
        } else {
            return "request invalid";
        }
    }
    public function destroy()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $Vacunas = new Vacuna();
            $Vacunas->delete($id);
            header('Location: index.php?controller=Vacunas&action=index');
        }
    }

}