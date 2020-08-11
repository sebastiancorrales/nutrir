<?php
include_once 'core\BaseModel.php';

class UnidadServicio extends BaseModel
{
    private $nombre;
    private $direccion;

    public function __construct($nom = null, $dir=null)
    {
        $this->table = "unidades_servicios";
        $this->nombre = $nom;
        $this->direccion = $dir;
        parent::__construct();
    }

    public function save()
    {
        try {
            $nombre = $this->getNombre();
            $direccion = $this->getDireccion();
            $sql = $this->dbConnection->prepare(
                'INSERT INTO unidades_servicios (nombre, direccion) 
                 VALUES (:nombre, :direccion)'
            );
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':direccion', $direccion);
            $sql->execute();
        } catch (Error $e) {
            echo $e;
        }
    }

    public function update($id)
    {
        try {
            $sql = $this->dbConnection->prepare(
                'UPDATE unidades_servicios SET nombre=:nombre, direccion = :direccion
                   WHERE id = :id'
            );
            $nombre = $this->getNombre();
            $direccion = $this->getDireccion();
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':direccion', $direccion);
            $sql->bindParam(':id', $id);
            $sql->execute();
        } catch (Error $e) {
            echo $e;
        }
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
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }
}
