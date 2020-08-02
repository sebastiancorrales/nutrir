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

class PertenenciaEtnicaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }


    public function get()
    {
        $errors = array(
            "get" => false,
            "message" => "Error en la peticion AJAX",
        );

        $tipo_poblacion = new PerteneciaEtnica();
        $tipo = $tipo_poblacion->all();
        if ($tipo) {
            $errors['get'] = true;
            $errors['message'] = "datos obtenidos con exito";
        } else {
            $errors['get'] = true;
            $errors['message'] = "Error al traer los datos";
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($tipo);
    }
    public function index()
    {
        $pertenencia_etnica = new PerteneciaEtnica();
        $pertenencias = $pertenencia_etnica->all();
        $currentView = 'views/administration-panel/pertenencia-etnica/index.php';
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
            $pertenencia_etnica = new PerteneciaEtnica($nombre, $descripcion);
            $pertenencia_etnica->save();
            header('Location: index.php?controller=PertenenciaEtnica&action=index');
        } else {
            return "request invalid";
        }
    }
    public function show()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $pertenencia_etnica = new PerteneciaEtnica();
            $pertenencia = $pertenencia_etnica->get($id);
            $currentView = 'views/administration-panel/pertenencia-etnica/detail.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function edit()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $pertenencia_etnica = new PerteneciaEtnica();
            $pertenencia = $pertenencia_etnica->get($id);
            $currentView = 'views/administration-panel/pertenencia-etnica/edit.php';
            require_once 'views/layouts/' . $this->layout;
        }
    }
    public function update()
    {
        if ($_POST['nombre']) {
            $id = $_GET['id'];
            $nombre = isset($_POST['nombre']) ? strtolower($_POST['nombre']) : false;
            $descripcion = isset($_POST['descripcion']) ? strtolower($_POST['descripcion']) : null;
            $pertenencia_etnica = new PerteneciaEtnica($nombre, $descripcion);
            $pertenencia_etnica->update($id);
            header('Location: index.php?controller=PertenenciaEtnica&action=index');
        } else {
            return "request invalid";
        }
    }
    public function destroy()
    {
        if ($_GET['id']) {
            $id = ($_GET['id']);
            $pertenencia_etnica = new PerteneciaEtnica();
            $pertenencia_etnica->delete($id);
            header('Location: index.php?controller=PertenenciaEtnica&action=index');
        }
    }
}
