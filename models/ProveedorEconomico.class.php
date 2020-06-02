<?php
include_once 'core\BaseModel.php';

class ProveedorEconomico extends BaseModel
{
    private $nombreCompleto;
    private $ocupacion;
    private $lugarDondeLabora;
    private $ingresosSMLV;
    private $egresosSMLV;

    public function __construct()
    {
        parent::__construct();
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
     * Get the value of ocupacion
     */ 
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set the value of ocupacion
     *
     * @return  self
     */ 
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get the value of lugarDondeLabora
     */ 
    public function getLugarDondeLabora()
    {
        return $this->lugarDondeLabora;
    }

    /**
     * Set the value of lugarDondeLabora
     *
     * @return  self
     */ 
    public function setLugarDondeLabora($lugarDondeLabora)
    {
        $this->lugarDondeLabora = $lugarDondeLabora;

        return $this;
    }

    /**
     * Get the value of ingresosSMLV
     */ 
    public function getIngresosSMLV()
    {
        return $this->ingresosSMLV;
    }

    /**
     * Set the value of ingresosSMLV
     *
     * @return  self
     */ 
    public function setIngresosSMLV($ingresosSMLV)
    {
        $this->ingresosSMLV = $ingresosSMLV;

        return $this;
    }

    /**
     * Get the value of egresosSMLV
     */ 
    public function getEgresosSMLV()
    {
        return $this->egresosSMLV;
    }

    /**
     * Set the value of egresosSMLV
     *
     * @return  self
     */ 
    public function setEgresosSMLV($egresosSMLV)
    {
        $this->egresosSMLV = $egresosSMLV;

        return $this;
    }
}
