<?php
include_once 'core\BaseModel.php';

class Departamento extends BaseModel
{
    private $nombre;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}
