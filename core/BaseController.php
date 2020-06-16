<?php

session_start();
class BaseController
{
    protected $layout = "app.php";
    public function __construct()
    {
        require_once 'Connection.php';
        require_once 'BaseModel.php';

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