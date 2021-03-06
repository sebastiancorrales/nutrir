<?php
include_once 'core\BaseModel.php';

class Vacuna extends BaseModel
{
    private $nombre;
    private $descripcion;

    public function __construct($nom = null, $desc = null)
    {
        $this->table = "vacunas";
        $this->nombre = $nom;
        $this->descripcion = $desc;
        parent::__construct();
    }

    public function save()
    {
        try {
            $nombre = $this->getNombre();
            $descripcion = $this->getDescripcion();
            $sql = $this->dbConnection->prepare(
                'INSERT INTO vacunas (nombre, descripcion) 
                 VALUES (:nombre, :descripcion)'
            );
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':descripcion', $descripcion);
            $sql->execute();
        } catch (Error $e) {
            echo $e;
        }
    }
    public function update($id)
    {
        try {
            $sql = $this->dbConnection->prepare(
                'UPDATE vacunas SET nombre=:nombre, descripcion = :descripcion
                   WHERE id = :id'
            );
            $nombre = $this->getNombre();
            $descripcion = $this->getDescripcion();
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':descripcion', $descripcion);
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
}
