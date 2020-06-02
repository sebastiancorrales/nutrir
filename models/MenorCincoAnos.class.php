<?php
include_once 'core\BaseModel.php';

class MenorCincoAnos extends BaseModel
{
    private $pesoAlNacer;
    private $tallaAlNacer;
    private $recibioLactanciaMaterna;
    private $tiempoLactancia;
    private $totalLactancia;
    private $esquemaVacunacion;
    private $controlSaludUltimosMeses;  //ultimos 12 meses

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of pesoAlNacer
     */ 
    public function getPesoAlNacer()
    {
        return $this->pesoAlNacer;
    }

    /**
     * Set the value of pesoAlNacer
     *
     * @return  self
     */ 
    public function setPesoAlNacer($pesoAlNacer)
    {
        $this->pesoAlNacer = $pesoAlNacer;

        return $this;
    }

    /**
     * Get the value of tallaAlNacer
     */ 
    public function getTallaAlNacer()
    {
        return $this->tallaAlNacer;
    }

    /**
     * Set the value of tallaAlNacer
     *
     * @return  self
     */ 
    public function setTallaAlNacer($tallaAlNacer)
    {
        $this->tallaAlNacer = $tallaAlNacer;

        return $this;
    }

    /**
     * Get the value of recibioLactanciaMaterna
     */ 
    public function getRecibioLactanciaMaterna()
    {
        return $this->recibioLactanciaMaterna;
    }

    /**
     * Set the value of recibioLactanciaMaterna
     *
     * @return  self
     */ 
    public function setRecibioLactanciaMaterna($recibioLactanciaMaterna)
    {
        $this->recibioLactanciaMaterna = $recibioLactanciaMaterna;

        return $this;
    }

    /**
     * Get the value of tiempoLactancia
     */ 
    public function getTiempoLactancia()
    {
        return $this->tiempoLactancia;
    }

    /**
     * Set the value of tiempoLactancia
     *
     * @return  self
     */ 
    public function setTiempoLactancia($tiempoLactancia)
    {
        $this->tiempoLactancia = $tiempoLactancia;

        return $this;
    }

    /**
     * Get the value of totalLactancia
     */ 
    public function getTotalLactancia()
    {
        return $this->totalLactancia;
    }

    /**
     * Set the value of totalLactancia
     *
     * @return  self
     */ 
    public function setTotalLactancia($totalLactancia)
    {
        $this->totalLactancia = $totalLactancia;

        return $this;
    }

    /**
     * Get the value of esquemaVacunacion
     */ 
    public function getEsquemaVacunacion()
    {
        return $this->esquemaVacunacion;
    }

    /**
     * Set the value of esquemaVacunacion
     *
     * @return  self
     */ 
    public function setEsquemaVacunacion($esquemaVacunacion)
    {
        $this->esquemaVacunacion = $esquemaVacunacion;

        return $this;
    }

    /**
     * Get the value of controlSaludUltimosMeses
     */ 
    public function getControlSaludUltimosMeses()
    {
        return $this->controlSaludUltimosMeses;
    }

    /**
     * Set the value of controlSaludUltimosMeses
     *
     * @return  self
     */ 
    public function setControlSaludUltimosMeses($controlSaludUltimosMeses)
    {
        $this->controlSaludUltimosMeses = $controlSaludUltimosMeses;

        return $this;
    }
}
