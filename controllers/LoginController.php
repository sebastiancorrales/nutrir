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
            $password =  isset($_POST['txtPassword']) ? trim($_POST['txtPassword']): "";
            $errors = "";

            if ($email == '' || $password == '') {
                $errors = "El usuario y contraseña no pueden ser vacios";
                require_once "views/layouts/".$this->layout;
            }
            else
            {
                if (isset($_POST['email'])) {

                        $usuario = new Usuario();
                        $usuario -> setEmail($email);
                        $usuario -> setPassword($password);

                        if($usuario->validarLogin())
                        {
                            // header("Location: index.php?controller=Vacunas&action=index");
                        }
                        else
                        {
                            $errors = "El usuario o contraseña son incorrectos";
                            require_once 'views/layouts/'.$this->layout;
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
}