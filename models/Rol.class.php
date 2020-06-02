<?php
include_once 'core\BaseModel.php';

class Rol extends BaseModel
{
    private $nombre;
    private $descripcion;
    private $permisos;

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

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of permisos
     */ 
    public function getPermisos()
    {
        return $this->permisos;
    }

    /**
     * Set the value of permisos
     *
     * @return  self
     */ 
    public function setPermisos($permisos)
    {
        $this->permisos = $permisos;

        return $this;
    }
}
