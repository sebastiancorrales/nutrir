<?php
include_once 'core\BaseModel.php';

class SeguridadSocial extends BaseModel
{
    private $nombreEps;
    private $tipoAfiliacion;
    private $tieneSisben;
    private $puntajeSisben;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of nombreEps
     */ 
    public function getNombreEps()
    {
        return $this->nombreEps;
    }

    /**
     * Set the value of nombreEps
     *
     * @return  self
     */ 
    public function setNombreEps($nombreEps)
    {
        $this->nombreEps = $nombreEps;

        return $this;
    }

    /**
     * Get the value of tipoAfiliacion
     */ 
    public function getTipoAfiliacion()
    {
        return $this->tipoAfiliacion;
    }

    /**
     * Set the value of tipoAfiliacion
     *
     * @return  self
     */ 
    public function setTipoAfiliacion($tipoAfiliacion)
    {
        $this->tipoAfiliacion = $tipoAfiliacion;

        return $this;
    }

    /**
     * Get the value of tieneSisben
     */ 
    public function getTieneSisben()
    {
        return $this->tieneSisben;
    }

    /**
     * Set the value of tieneSisben
     *
     * @return  self
     */ 
    public function setTieneSisben($tieneSisben)
    {
        $this->tieneSisben = $tieneSisben;

        return $this;
    }

    /**
     * Get the value of puntajeSisben
     */ 
    public function getPuntajeSisben()
    {
        return $this->puntajeSisben;
    }

    /**
     * Set the value of puntajeSisben
     *
     * @return  self
     */ 
    public function setPuntajeSisben($puntajeSisben)
    {
        $this->puntajeSisben = $puntajeSisben;

        return $this;
    }
}
