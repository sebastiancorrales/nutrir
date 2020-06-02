<?php

session_start();
class BaseController
{
    protected $layout = "admin_layout.php";
    public function __construct()
    {
        require_once 'Connection.php';
        require_once 'BaseModel.php';
        require_once 'models/Paciente.class.php';
        require_once 'models/Especialidad.class.php';

        if(isset($_SESSION['timeout'])){
            $tiempoSesion = time() - $_SESSION['timeout'];
            if($tiempoSesion > (TIEMPO_INACTIVIDAD * 60)){
                session_destroy();
                header('location:index.php');
            }else{
                $_SESSION['timeot'] = time();
            }
        }
    }
  

    // Crear los Métodos que sean comunes para todos los controladores
}
?>