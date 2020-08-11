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

class UnidadservicioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }

    public function index()
    {
        $US = new UnidadServicio();
        $USS = $US->all();
        $currentView = 'views/administration-panel/UnidadesServicio/index.php';
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
            $direccion = isset($_POST['direccion']) ? strtolower($_POST['direccion']) : null;
            $US = new UnidadServicio($nombre,$direccion);
            $US->save();
            header('Location: index.php?controller=Unidadservicio&action=index');
        } else {
            return "request invalid";
        }
    }

    public function show()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $US = new UnidadServicio();
            $USS = $US->get($id);
            $currentView = 'views/administration-panel/UnidadesServicio/detail.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function edit()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $US = new UnidadServicio();
            $USS = $US->get($id);
            $currentView = 'views/administration-panel/UnidadesServicio/edit.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function update()
    {
        if ($_POST['nombre']) {
            $id = $_GET['id'];
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $direccion = isset($_POST['direccion']) ? strtolower($_POST['direccion']) : null;
            $USS = new UnidadServicio($nombre, $direccion);
            $USS->update($id);
            header('Location: index.php?controller=Unidadservicio&action=index');
        } else {
            return "request invalid";
        }
    }
    public function destroy()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $USS = new UnidadServicio();
            $USS->delete($id);
            header('Location: index.php?controller=Unidadservicio&action=index');
        }
    }

}