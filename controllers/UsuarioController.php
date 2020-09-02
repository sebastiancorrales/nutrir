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
include_once 'models\Usuario.class.php';

class UsuarioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "app.php";
        parent::__construct();
    }

    public function index()
    {
        $usuario = new Usuario();
        $usuarios = $usuario->all();
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
            $apellido = isset($_POST['apellido']) ? strtolower($_POST['apellido']) : null;
            $email = isset($_POST['email']) ? strtolower($_POST['email']): null;
            $password = isset($_POST['password']) ? strtolower($_POST['password']): null;
            $tipoDocumento = isset($_POST['tipo_documento']) ? strtolower($_POST['tipo_documento']) : null;
            $numeroDocumento = isset($_POST['numero_documento']) ? strtolower($_POST['numero_documento']): null;
            $numeroCelular = isset($_POST['celular']) ? strtolower($_POST['celular']): null;
            $profesion = isset($_POST['profesion']) ? strtolower($_POST['profesion']): null;
            $foto = isset($_POST['foto']) ? strtolower($_POST['foto']): null;

            $usuario = new Usuario($nombre,$apellido,$email,$password,$tipoDocumento,$numeroDocumento,$numeroCelular,$profesion,$foto);
            $usuario->save();
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