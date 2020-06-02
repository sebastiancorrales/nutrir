<?php
include_once 'core\BaseModel.php';

class GestanteLactante extends BaseModel
{
    private $edadGestacionalIngreso;
    private $antecedentesClinicos;
    private $antecedentesPatologicos;
    private $antecedentesConsumoFamilia;
    private $consumeAlcohol;
    private $consumeCigarrillo;
    private $consuemSPA;
    private $cualSPA;

    // Metodos de planificacion

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of edadGestacionalIngreso
     */ 
    public function getEdadGestacionalIngreso()
    {
        return $this->edadGestacionalIngreso;
    }

    /**
     * Set the value of edadGestacionalIngreso
     *
     * @return  self
     */ 
    public function setEdadGestacionalIngreso($edadGestacionalIngreso)
    {
        $this->edadGestacionalIngreso = $edadGestacionalIngreso;

        return $this;
    }

    /**
     * Get the value of antecedentesClinicos
     */ 
    public function getAntecedentesClinicos()
    {
        return $this->antecedentesClinicos;
    }

    /**
     * Set the value of antecedentesClinicos
     *
     * @return  self
     */ 
    public function setAntecedentesClinicos($antecedentesClinicos)
    {
        $this->antecedentesClinicos = $antecedentesClinicos;

        return $this;
    }

    /**
     * Get the value of antecedentesPatologicos
     */ 
    public function getAntecedentesPatologicos()
    {
        return $this->antecedentesPatologicos;
    }

    /**
     * Set the value of antecedentesPatologicos
     *
     * @return  self
     */ 
    public function setAntecedentesPatologicos($antecedentesPatologicos)
    {
        $this->antecedentesPatologicos = $antecedentesPatologicos;

        return $this;
    }

    /**
     * Get the value of antecedentesConsumoFamilia
     */ 
    public function getAntecedentesConsumoFamilia()
    {
        return $this->antecedentesConsumoFamilia;
    }

    /**
     * Set the value of antecedentesConsumoFamilia
     *
     * @return  self
     */ 
    public function setAntecedentesConsumoFamilia($antecedentesConsumoFamilia)
    {
        $this->antecedentesConsumoFamilia = $antecedentesConsumoFamilia;

        return $this;
    }

    /**
     * Get the value of consumeAlcohol
     */ 
    public function getConsumeAlcohol()
    {
        return $this->consumeAlcohol;
    }

    /**
     * Set the value of consumeAlcohol
     *
     * @return  self
     */ 
    public function setConsumeAlcohol($consumeAlcohol)
    {
        $this->consumeAlcohol = $consumeAlcohol;

        return $this;
    }

    /**
     * Get the value of consumeCigarrillo
     */ 
    public function getConsumeCigarrillo()
    {
        return $this->consumeCigarrillo;
    }

    /**
     * Set the value of consumeCigarrillo
     *
     * @return  self
     */ 
    public function setConsumeCigarrillo($consumeCigarrillo)
    {
        $this->consumeCigarrillo = $consumeCigarrillo;

        return $this;
    }

    /**
     * Get the value of consuemSPA
     */ 
    public function getConsuemSPA()
    {
        return $this->consuemSPA;
    }

    /**
     * Set the value of consuemSPA
     *
     * @return  self
     */ 
    public function setConsuemSPA($consuemSPA)
    {
        $this->consuemSPA = $consuemSPA;

        return $this;
    }

    /**
     * Get the value of cualSPA
     */ 
    public function getCualSPA()
    {
        return $this->cualSPA;
    }

    /**
     * Set the value of cualSPA
     *
     * @return  self
     */ 
    public function setCualSPA($cualSPA)
    {
        $this->cualSPA = $cualSPA;

        return $this;
    }
}
