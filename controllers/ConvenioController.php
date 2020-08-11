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

class ConvenioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }

    public function index()
    {
        $Convenio = new Convenio();
        $Convenios = $Convenio->all();
        $currentView = 'views/administration-panel/Convenio/index.php';
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
            $Convenio = new Convenio($nombre,$direccion);
            $Convenio->save();
            header('Location: index.php?controller=Convenio&action=index');
        } else {
            return "request invalid";
        }
    }

    public function show()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $Convenio = new Convenio();
            $Convenios = $Convenio->get($id);
            $currentView = 'views/administration-panel/Convenio/detail.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function edit()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $Convenio = new Convenio();
            $Convenios = $Convenio->get($id);
            $currentView = 'views/administration-panel/Convenio/edit.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function update()
    {
        if ($_POST['nombre']) {
            $id = $_GET['id'];
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $direccion = isset($_POST['descripcion']) ? strtolower($_POST['descripcion']) : null;
            $Convenios = new Convenio($nombre, $direccion);
            $Convenios->update($id);
            header('Location: index.php?controller=Convenio&action=index');
        } else {
            return "request invalid";
        }
    }
    public function destroy()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $Convenios = new Convenio();
            $Convenios->delete($id);
            header('Location: index.php?controller=Convenio&action=index');
        }
    }

}