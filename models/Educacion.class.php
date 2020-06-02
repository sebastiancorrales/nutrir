<?php
include_once 'core\BaseModel.php';

class Educacion extends BaseModel
{
    private $sabeLeerEscribir;
    private $nivelEducativo;
    private $estudiaActualmente;
    private $gradoQueCursaActualmente;
    private $jornadaEstudio;
    private $realizadoAlgunCurso;
    private $cualCurso;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of sabeLeerEscribir
     */ 
    public function getSabeLeerEscribir()
    {
        return $this->sabeLeerEscribir;
    }

    /**
     * Set the value of sabeLeerEscribir
     *
     * @return  self
     */ 
    public function setSabeLeerEscribir($sabeLeerEscribir)
    {
        $this->sabeLeerEscribir = $sabeLeerEscribir;

        return $this;
    }

    /**
     * Get the value of nivelEducativo
     */ 
    public function getNivelEducativo()
    {
        return $this->nivelEducativo;
    }

    /**
     * Set the value of nivelEducativo
     *
     * @return  self
     */ 
    public function setNivelEducativo($nivelEducativo)
    {
        $this->nivelEducativo = $nivelEducativo;

        return $this;
    }

    /**
     * Get the value of estudiaActualmente
     */ 
    public function getEstudiaActualmente()
    {
        return $this->estudiaActualmente;
    }

    /**
     * Set the value of estudiaActualmente
     *
     * @return  self
     */ 
    public function setEstudiaActualmente($estudiaActualmente)
    {
        $this->estudiaActualmente = $estudiaActualmente;

        return $this;
    }

    /**
     * Get the value of gradoQueCursaActualmente
     */ 
    public function getGradoQueCursaActualmente()
    {
        return $this->gradoQueCursaActualmente;
    }

    /**
     * Set the value of gradoQueCursaActualmente
     *
     * @return  self
     */ 
    public function setGradoQueCursaActualmente($gradoQueCursaActualmente)
    {
        $this->gradoQueCursaActualmente = $gradoQueCursaActualmente;

        return $this;
    }

    /**
     * Get the value of jornadaEstudio
     */ 
    public function getJornadaEstudio()
    {
        return $this->jornadaEstudio;
    }

    /**
     * Set the value of jornadaEstudio
     *
     * @return  self
     */ 
    public function setJornadaEstudio($jornadaEstudio)
    {
        $this->jornadaEstudio = $jornadaEstudio;

        return $this;
    }

    /**
     * Get the value of realizadoAlgunCurso
     */ 
    public function getRealizadoAlgunCurso()
    {
        return $this->realizadoAlgunCurso;
    }

    /**
     * Set the value of realizadoAlgunCurso
     *
     * @return  self
     */ 
    public function setRealizadoAlgunCurso($realizadoAlgunCurso)
    {
        $this->realizadoAlgunCurso = $realizadoAlgunCurso;

        return $this;
    }

    /**
     * Get the value of cualCurso
     */ 
    public function getCualCurso()
    {
        return $this->cualCurso;
    }

    /**
     * Set the value of cualCurso
     *
     * @return  self
     */ 
    public function setCualCurso($cualCurso)
    {
        $this->cualCurso = $cualCurso;

        return $this;
    }
}
