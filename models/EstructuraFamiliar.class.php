<?php
include_once 'core\BaseModel.php';

class EstructuraFamiliar extends BaseModel
{
    private $nombreCompleto;
    private $parentesco;
    private $fechaNacimiento; // Para calcular la edad
    private $edad;

    public function __construct()
    {
        $this->table = "estructura_familiar";
        parent::__construct();
    }

    public function create($nombreCompleto = null, $parentesco = null, $fechaNacimiento = null)
    {
        $this->nombreCompleto = $nombreCompleto;
        $this->parentesco = $parentesco;
        $this->fechaNacimiento = $fechaNacimiento;
    }
    public function save($id)
    {
        $nombre = $this->getNombreCompleto();
        $parentesco = $this->getParentesco();
        $fechaNacimiento = $this->getFechaNacimiento();

        $sql = $this->dbConnection->prepare('INSERT INTO estructura_familiar (nombre_completo, parentesco, fecha_nacimiento, beneficiario_id)
            VALUES (?,?,?,?)');
        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $parentesco);
        $sql->bindParam(3, $fechaNacimiento);
        $sql->bindParam(4, $id);
        $sql->execute();
    }
    /**
     * Get the value of nombreCompleto
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set the value of nombreCompleto
     *
     * @return  self
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get the value of parentesco
     */
    public function getParentesco()
    {
        return $this->parentesco;
    }

    /**
     * Set the value of parentesco
     *
     * @return  self
     */
    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
}
