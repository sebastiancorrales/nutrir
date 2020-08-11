<?php

class LoginController extends BaseController
{
    public function __construct()
    {
        parent:: __construct();
        $this->layout = "login.php";
    }

    public function initLogin()
    {
        $current_view = 'login/index.php';
        if (isset($_POST['txtEmail']) && $_POST['txtPassword'])
        {
            $email = isset($_POST['txtEmail']) ? trim($_POST['txtEmail']): "";
            $pass =  isset($_POST['txtPassword']) ? trim($_POST['txtPassword']): "";
            $errors = "";

            if ($email == '' || $pass == '') {
                $errors = "El usuario y contraseña no pueden ser vacios";
                require_once "views/layouts/".$this->layout;
            }
            else
            {
                if (isset($_POST['txtRol'])) {
                    $rol = isset($_POST['txtRol']) ? trim(($_POST['txtRol'])):"";

                    if ($rol == 'Doctor') 
                    {
                        $doctor = new Doctor();
                        $doctor -> setEmail($email);
                        $doctor -> setPassword($pass);

                        if($doctor->validarLogin())
                        {
                            header("Location:index.php?controller=Doctor&action=index");
                        }
                        else
                        {
                            $errors = "El usuario o contraseña son incorrectos";
                            require_once 'views/layouts/'.$this->layout;
                        }
                    }elseif ($rol == 'Paciente') {
                        $paciente = new Paciente();
                        $paciente -> setEmail($email);
                        $paciente -> setPassword($pass);
                        
                        if($paciente->validarLogin())
                        {
                            header("Location:index.php?controller=Paciente&action=index");
                        }
                        else
                        {
                            $errors = "El usuario o contraseña son incorrectos";
                            require_once 'views/layouts/'.$this->layout;
                        }
                    }
                } 
                echo  json_encode(array('error' => false));
            }
        }
        else
        {
            require_once 'views/layouts/'.$this->layout;        
        }
    }

    public function Logout()
    {       
        session_destroy();
        header("Location:index.php?controller=Login&action=initLogin");
    }

    public function error($code = 0)
    {
        $codeMessage = isset($_GET['msg']) ? $_GET['msg']: $code;
        $message = "";
        switch($codeMessage)
        {
            case 1:
                $message = "No esta autorizado para realizar esta accion";
            break;

            case 2:
                $message = "La accion que intenta cargar no existe";
            break;

            default:
                $message = "Error desconocido";
            break;
        }
    }
    public function create()
    {
        $current_view = 'Login/create.php';
        require_once 'views/layouts/' . $this->layout;
    }
    public function store()
    {
    
        
    }
}