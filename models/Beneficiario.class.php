<?php
include_once 'core\BaseModel.php';

class Beneficiario extends BaseModel
{
    private $estado;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $tipoDocumento;
    private $numeroDocumento;
    private $fechaNacimiento;
    private $genero;
    private $parentescoOtroFamiliar;
    private $estadoCivil;
    private $esPoblacionDesplazada;
    private $esVictimaOtroTipoViolencia;
    private $cualViolencia;
    private $fechaInscripcion;
    private $fechaIngreso;
    private $autorizaManejoInfo;
    private $pesoIngreso;
    private $tallaIngreso;
    private $estadoNutricionalIngreso;
    private $nacimientoTermino;
    private $mesesNacimiento;
    private $tipologiaFamiliar;

    // Foreign Keys

    private $fk_tipoPoblacion;
    private $fk_pertenenciaEtnica;
    private $fk_grupoEtario;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of primerNombre
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set the value of primerNombre
     *
     * @return  self
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get the value of segundoNombre
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set the value of segundoNombre
     *
     * @return  self
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    /**
     * Get the value of primerApellido
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set the value of primerApellido
     *
     * @return  self
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get the value of segundoApellido
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set the value of segundoApellido
     *
     * @return  self
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get the value of tipoDocumento
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set the value of tipoDocumento
     *
     * @return  self
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get the value of numeroDocumento
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set the value of numeroDocumento
     *
     * @return  self
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

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
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of parentescoOtroFamiliar
     */
    public function getParentescoOtroFamiliar()
    {
        return $this->parentescoOtroFamiliar;
    }

    /**
     * Set the value of parentescoOtroFamiliar
     *
     * @return  self
     */
    public function setParentescoOtroFamiliar($parentescoOtroFamiliar)
    {
        $this->parentescoOtroFamiliar = $parentescoOtroFamiliar;

        return $this;
    }

    /**
     * Get the value of estadoCivil
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set the value of estadoCivil
     *
     * @return  self
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get the value of esPoblacionDesplazada
     */
    public function getEsPoblacionDesplazada()
    {
        return $this->esPoblacionDesplazada;
    }

    /**
     * Set the value of esPoblacionDesplazada
     *
     * @return  self
     */
    public function setEsPoblacionDesplazada($esPoblacionDesplazada)
    {
        $this->esPoblacionDesplazada = $esPoblacionDesplazada;

        return $this;
    }

    /**
     * Get the value of esVictimaOtroTipoViolencia
     */
    public function getEsVictimaOtroTipoViolencia()
    {
        return $this->esVictimaOtroTipoViolencia;
    }

    /**
     * Set the value of esVictimaOtroTipoViolencia
     *
     * @return  self
     */
    public function setEsVictimaOtroTipoViolencia($esVictimaOtroTipoViolencia)
    {
        $this->esVictimaOtroTipoViolencia = $esVictimaOtroTipoViolencia;

        return $this;
    }

    /**
     * Get the value of cualViolencia
     */
    public function getCualViolencia()
    {
        return $this->cualViolencia;
    }

    /**
     * Set the value of cualViolencia
     *
     * @return  self
     */
    public function setCualViolencia($cualViolencia)
    {
        $this->cualViolencia = $cualViolencia;

        return $this;
    }

    /**
     * Get the value of fechaInscripcion
     */
    public function getFechaInscripcion()
    {
        return $this->fechaInscripcion;
    }

    /**
     * Set the value of fechaInscripcion
     *
     * @return  self
     */
    public function setFechaInscripcion($fechaInscripcion)
    {
        $this->fechaInscripcion = $fechaInscripcion;

        return $this;
    }

    /**
     * Get the value of fechaIngreso
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set the value of fechaIngreso
     *
     * @return  self
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get the value of autorizaManejoInfo
     */
    public function getAutorizaManejoInfo()
    {
        return $this->autorizaManejoInfo;
    }

    /**
     * Set the value of autorizaManejoInfo
     *
     * @return  self
     */
    public function setAutorizaManejoInfo($autorizaManejoInfo)
    {
        $this->autorizaManejoInfo = $autorizaManejoInfo;

        return $this;
    }

    /**
     * Get the value of pesoIngreso
     */
    public function getPesoIngreso()
    {
        return $this->pesoIngreso;
    }

    /**
     * Set the value of pesoIngreso
     *
     * @return  self
     */
    public function setPesoIngreso($pesoIngreso)
    {
        $this->pesoIngreso = $pesoIngreso;

        return $this;
    }

    /**
     * Get the value of tallaIngreso
     */
    public function getTallaIngreso()
    {
        return $this->tallaIngreso;
    }

    /**
     * Set the value of tallaIngreso
     *
     * @return  self
     */
    public function setTallaIngreso($tallaIngreso)
    {
        $this->tallaIngreso = $tallaIngreso;

        return $this;
    }

    /**
     * Get the value of estadoNutricionalIngreso
     */
    public function getEstadoNutricionalIngreso()
    {
        return $this->estadoNutricionalIngreso;
    }

    /**
     * Set the value of estadoNutricionalIngreso
     *
     * @return  self
     */
    public function setEstadoNutricionalIngreso($estadoNutricionalIngreso)
    {
        $this->estadoNutricionalIngreso = $estadoNutricionalIngreso;

        return $this;
    }

    /**
     * Get the value of nacimientoTermino
     */
    public function getNacimientoTermino()
    {
        return $this->nacimientoTermino;
    }

    /**
     * Set the value of nacimientoTermino
     *
     * @return  self
     */
    public function setNacimientoTermino($nacimientoTermino)
    {
        $this->nacimientoTermino = $nacimientoTermino;

        return $this;
    }

    /**
     * Get the value of mesesNacimiento
     */
    public function getMesesNacimiento()
    {
        return $this->mesesNacimiento;
    }

    /**
     * Set the value of mesesNacimiento
     *
     * @return  self
     */
    public function setMesesNacimiento($mesesNacimiento)
    {
        $this->mesesNacimiento = $mesesNacimiento;

        return $this;
    }

    /**
     * Get the value of tipologiaFamiliar
     */
    public function getTipologiaFamiliar()
    {
        return $this->tipologiaFamiliar;
    }

    /**
     * Set the value of tipologiaFamiliar
     *
     * @return  self
     */
    public function setTipologiaFamiliar($tipologiaFamiliar)
    {
        $this->tipologiaFamiliar = $tipologiaFamiliar;

        return $this;
    }
}
