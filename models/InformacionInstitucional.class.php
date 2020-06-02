<?php
include_once 'core\BaseModel.php';

class InformacionInstitucional extends BaseModel
{
    private $requiereVisita;
    private $exoneracionCuota;
    private $contextoFamiliar;
    private $nombreQuienAplicaCaracterizacion;
    private $cargoQuienAplicaCaracterizacion;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of requiereVisita
     */ 
    public function getRequiereVisita()
    {
        return $this->requiereVisita;
    }

    /**
     * Set the value of requiereVisita
     *
     * @return  self
     */ 
    public function setRequiereVisita($requiereVisita)
    {
        $this->requiereVisita = $requiereVisita;

        return $this;
    }

    /**
     * Get the value of exoneracionCuota
     */ 
    public function getExoneracionCuota()
    {
        return $this->exoneracionCuota;
    }

    /**
     * Set the value of exoneracionCuota
     *
     * @return  self
     */ 
    public function setExoneracionCuota($exoneracionCuota)
    {
        $this->exoneracionCuota = $exoneracionCuota;

        return $this;
    }

    /**
     * Get the value of contextoFamiliar
     */ 
    public function getContextoFamiliar()
    {
        return $this->contextoFamiliar;
    }

    /**
     * Set the value of contextoFamiliar
     *
     * @return  self
     */ 
    public function setContextoFamiliar($contextoFamiliar)
    {
        $this->contextoFamiliar = $contextoFamiliar;

        return $this;
    }

    /**
     * Get the value of nombreQuienAplicaCaracterizacion
     */ 
    public function getNombreQuienAplicaCaracterizacion()
    {
        return $this->nombreQuienAplicaCaracterizacion;
    }

    /**
     * Set the value of nombreQuienAplicaCaracterizacion
     *
     * @return  self
     */ 
    public function setNombreQuienAplicaCaracterizacion($nombreQuienAplicaCaracterizacion)
    {
        $this->nombreQuienAplicaCaracterizacion = $nombreQuienAplicaCaracterizacion;

        return $this;
    }

    /**
     * Get the value of cargoQuienAplicaCaracterizacion
     */ 
    public function getCargoQuienAplicaCaracterizacion()
    {
        return $this->cargoQuienAplicaCaracterizacion;
    }

    /**
     * Set the value of cargoQuienAplicaCaracterizacion
     *
     * @return  self
     */ 
    public function setCargoQuienAplicaCaracterizacion($cargoQuienAplicaCaracterizacion)
    {
        $this->cargoQuienAplicaCaracterizacion = $cargoQuienAplicaCaracterizacion;

        return $this;
    }
}
