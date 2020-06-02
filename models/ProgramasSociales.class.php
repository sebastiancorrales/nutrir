<?php
include_once 'core\BaseModel.php';

class ProgramasSociales extends BaseModel
{
    private $incritoEnOtroPrograma;
    private $quePorgrama;
    private $algunTipoSubsidio;
    private $cualSubsidio;
    private $ingresosRecibidos;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of incritoEnOtroPrograma
     */ 
    public function getIncritoEnOtroPrograma()
    {
        return $this->incritoEnOtroPrograma;
    }

    /**
     * Set the value of incritoEnOtroPrograma
     *
     * @return  self
     */ 
    public function setIncritoEnOtroPrograma($incritoEnOtroPrograma)
    {
        $this->incritoEnOtroPrograma = $incritoEnOtroPrograma;

        return $this;
    }

    /**
     * Get the value of quePorgrama
     */ 
    public function getQuePorgrama()
    {
        return $this->quePorgrama;
    }

    /**
     * Set the value of quePorgrama
     *
     * @return  self
     */ 
    public function setQuePorgrama($quePorgrama)
    {
        $this->quePorgrama = $quePorgrama;

        return $this;
    }

    /**
     * Get the value of algunTipoSubsidio
     */ 
    public function getAlgunTipoSubsidio()
    {
        return $this->algunTipoSubsidio;
    }

    /**
     * Set the value of algunTipoSubsidio
     *
     * @return  self
     */ 
    public function setAlgunTipoSubsidio($algunTipoSubsidio)
    {
        $this->algunTipoSubsidio = $algunTipoSubsidio;

        return $this;
    }

    /**
     * Get the value of cualSubsidio
     */ 
    public function getCualSubsidio()
    {
        return $this->cualSubsidio;
    }

    /**
     * Set the value of cualSubsidio
     *
     * @return  self
     */ 
    public function setCualSubsidio($cualSubsidio)
    {
        $this->cualSubsidio = $cualSubsidio;

        return $this;
    }

    /**
     * Get the value of ingresosRecibidos
     */ 
    public function getIngresosRecibidos()
    {
        return $this->ingresosRecibidos;
    }

    /**
     * Set the value of ingresosRecibidos
     *
     * @return  self
     */ 
    public function setIngresosRecibidos($ingresosRecibidos)
    {
        $this->ingresosRecibidos = $ingresosRecibidos;

        return $this;
    }
}
