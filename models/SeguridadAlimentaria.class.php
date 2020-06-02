<?php
include_once 'core\BaseModel.php';

class SeguridadAlimenataria extends BaseModel
{
    private $dondeObtieneAgua;
    private $cantidadComidasConsumeDia;
    private $necesidadReducirProcionesUltimoMes;
    private $causa;
    private $quienPreparaAlimentos;
    private $granos;
    private $verduras;
    private $lacteos;
    private $huevos;

    // Fk Beneficiario

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of dondeObtieneAgua
     */ 
    public function getDondeObtieneAgua()
    {
        return $this->dondeObtieneAgua;
    }

    /**
     * Set the value of dondeObtieneAgua
     *
     * @return  self
     */ 
    public function setDondeObtieneAgua($dondeObtieneAgua)
    {
        $this->dondeObtieneAgua = $dondeObtieneAgua;

        return $this;
    }

    /**
     * Get the value of cantidadComidasConsumeDia
     */ 
    public function getCantidadComidasConsumeDia()
    {
        return $this->cantidadComidasConsumeDia;
    }

    /**
     * Set the value of cantidadComidasConsumeDia
     *
     * @return  self
     */ 
    public function setCantidadComidasConsumeDia($cantidadComidasConsumeDia)
    {
        $this->cantidadComidasConsumeDia = $cantidadComidasConsumeDia;

        return $this;
    }

    /**
     * Get the value of necesidadReducirProcionesUltimoMes
     */ 
    public function getNecesidadReducirProcionesUltimoMes()
    {
        return $this->necesidadReducirProcionesUltimoMes;
    }

    /**
     * Set the value of necesidadReducirProcionesUltimoMes
     *
     * @return  self
     */ 
    public function setNecesidadReducirProcionesUltimoMes($necesidadReducirProcionesUltimoMes)
    {
        $this->necesidadReducirProcionesUltimoMes = $necesidadReducirProcionesUltimoMes;

        return $this;
    }

    /**
     * Get the value of causa
     */ 
    public function getCausa()
    {
        return $this->causa;
    }

    /**
     * Set the value of causa
     *
     * @return  self
     */ 
    public function setCausa($causa)
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get the value of quienPreparaAlimentos
     */ 
    public function getQuienPreparaAlimentos()
    {
        return $this->quienPreparaAlimentos;
    }

    /**
     * Set the value of quienPreparaAlimentos
     *
     * @return  self
     */ 
    public function setQuienPreparaAlimentos($quienPreparaAlimentos)
    {
        $this->quienPreparaAlimentos = $quienPreparaAlimentos;

        return $this;
    }

    /**
     * Get the value of granos
     */ 
    public function getGranos()
    {
        return $this->granos;
    }

    /**
     * Set the value of granos
     *
     * @return  self
     */ 
    public function setGranos($granos)
    {
        $this->granos = $granos;

        return $this;
    }

    /**
     * Get the value of verduras
     */ 
    public function getVerduras()
    {
        return $this->verduras;
    }

    /**
     * Set the value of verduras
     *
     * @return  self
     */ 
    public function setVerduras($verduras)
    {
        $this->verduras = $verduras;

        return $this;
    }

    /**
     * Get the value of lacteos
     */ 
    public function getLacteos()
    {
        return $this->lacteos;
    }

    /**
     * Set the value of lacteos
     *
     * @return  self
     */ 
    public function setLacteos($lacteos)
    {
        $this->lacteos = $lacteos;

        return $this;
    }

    /**
     * Get the value of huevos
     */ 
    public function getHuevos()
    {
        return $this->huevos;
    }

    /**
     * Set the value of huevos
     *
     * @return  self
     */ 
    public function setHuevos($huevos)
    {
        $this->huevos = $huevos;

        return $this;
    }
}
