<?php
include_once 'core\BaseModel.php';

class UbicacionVivienda extends BaseModel
{
    private $zona;
    private $veredaBarrio;
    private $direccion;
    private $telefonoFijo;
    private $celularPersonal;
    private $celularPersonal2;
    private $estrato;
    private $tipoVivienda;
    private $tenencia;
    private $materialEstructura;
    private $materialSuelo;
    private $serviciosPublicos;
    private $cantidadCuartos;
    private $cuantosCuartosDuermenPersonas;
    private $servicioSanitario;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of zona
     */ 
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set the value of zona
     *
     * @return  self
     */ 
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get the value of veredaBarrio
     */ 
    public function getVeredaBarrio()
    {
        return $this->veredaBarrio;
    }

    /**
     * Set the value of veredaBarrio
     *
     * @return  self
     */ 
    public function setVeredaBarrio($veredaBarrio)
    {
        $this->veredaBarrio = $veredaBarrio;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of telefonoFijo
     */ 
    public function getTelefonoFijo()
    {
        return $this->telefonoFijo;
    }

    /**
     * Set the value of telefonoFijo
     *
     * @return  self
     */ 
    public function setTelefonoFijo($telefonoFijo)
    {
        $this->telefonoFijo = $telefonoFijo;

        return $this;
    }

    /**
     * Get the value of celularPersonal
     */ 
    public function getCelularPersonal()
    {
        return $this->celularPersonal;
    }

    /**
     * Set the value of celularPersonal
     *
     * @return  self
     */ 
    public function setCelularPersonal($celularPersonal)
    {
        $this->celularPersonal = $celularPersonal;

        return $this;
    }

    /**
     * Get the value of celularPersonal2
     */ 
    public function getCelularPersonal2()
    {
        return $this->celularPersonal2;
    }

    /**
     * Set the value of celularPersonal2
     *
     * @return  self
     */ 
    public function setCelularPersonal2($celularPersonal2)
    {
        $this->celularPersonal2 = $celularPersonal2;

        return $this;
    }

    /**
     * Get the value of estrato
     */ 
    public function getEstrato()
    {
        return $this->estrato;
    }

    /**
     * Set the value of estrato
     *
     * @return  self
     */ 
    public function setEstrato($estrato)
    {
        $this->estrato = $estrato;

        return $this;
    }

    /**
     * Get the value of tipoVivienda
     */ 
    public function getTipoVivienda()
    {
        return $this->tipoVivienda;
    }

    /**
     * Set the value of tipoVivienda
     *
     * @return  self
     */ 
    public function setTipoVivienda($tipoVivienda)
    {
        $this->tipoVivienda = $tipoVivienda;

        return $this;
    }

    /**
     * Get the value of tenencia
     */ 
    public function getTenencia()
    {
        return $this->tenencia;
    }

    /**
     * Set the value of tenencia
     *
     * @return  self
     */ 
    public function setTenencia($tenencia)
    {
        $this->tenencia = $tenencia;

        return $this;
    }

    /**
     * Get the value of materialEstructura
     */ 
    public function getMaterialEstructura()
    {
        return $this->materialEstructura;
    }

    /**
     * Set the value of materialEstructura
     *
     * @return  self
     */ 
    public function setMaterialEstructura($materialEstructura)
    {
        $this->materialEstructura = $materialEstructura;

        return $this;
    }

    /**
     * Get the value of materialSuelo
     */ 
    public function getMaterialSuelo()
    {
        return $this->materialSuelo;
    }

    /**
     * Set the value of materialSuelo
     *
     * @return  self
     */ 
    public function setMaterialSuelo($materialSuelo)
    {
        $this->materialSuelo = $materialSuelo;

        return $this;
    }

    /**
     * Get the value of serviciosPublicos
     */ 
    public function getServiciosPublicos()
    {
        return $this->serviciosPublicos;
    }

    /**
     * Set the value of serviciosPublicos
     *
     * @return  self
     */ 
    public function setServiciosPublicos($serviciosPublicos)
    {
        $this->serviciosPublicos = $serviciosPublicos;

        return $this;
    }

    /**
     * Get the value of cantidadCuartos
     */ 
    public function getCantidadCuartos()
    {
        return $this->cantidadCuartos;
    }

    /**
     * Set the value of cantidadCuartos
     *
     * @return  self
     */ 
    public function setCantidadCuartos($cantidadCuartos)
    {
        $this->cantidadCuartos = $cantidadCuartos;

        return $this;
    }

    /**
     * Get the value of cuantosCuartosDuermenPersonas
     */ 
    public function getCuantosCuartosDuermenPersonas()
    {
        return $this->cuantosCuartosDuermenPersonas;
    }

    /**
     * Set the value of cuantosCuartosDuermenPersonas
     *
     * @return  self
     */ 
    public function setCuantosCuartosDuermenPersonas($cuantosCuartosDuermenPersonas)
    {
        $this->cuantosCuartosDuermenPersonas = $cuantosCuartosDuermenPersonas;

        return $this;
    }

    /**
     * Get the value of servicioSanitario
     */ 
    public function getServicioSanitario()
    {
        return $this->servicioSanitario;
    }

    /**
     * Set the value of servicioSanitario
     *
     * @return  self
     */ 
    public function setServicioSanitario($servicioSanitario)
    {
        $this->servicioSanitario = $servicioSanitario;

        return $this;
    }
}
