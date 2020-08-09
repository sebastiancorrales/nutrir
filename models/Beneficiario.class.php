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
    private $lugarNacimiento;
    private $paisNacimiento;
    private $parentescoConOtroFamiliar;
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
        $this->table = 'beneficiarios';
        parent::__construct();
    }

    public function informacionGeneral(
        $primerNombre = null,
        $segundoNombre = null,
        $primerApellido = null,
        $segundoApellido = null,
        $tipoDocumento = null,
        $numeroDocumento = null,
        $estadoCivil = null,
        $fechaInscripcion = null
    ) {
        $this->estado = "activo";
        $this->primerNombre = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
        $this->estadoCivil = $estadoCivil;
        $this->fechaInscripcion = $fechaInscripcion;
    }
    public function informacionInstitucional(
        $numeroDocumento,
        $paisNacimiento,
        $lugarNacimiento,
        $fechaNacimiento,
        $nacimientoTermino,
        $mesesNacimiento,
        $parentescoConOtroFamiliar,
        $tipologiaFamiliar,
        $esPoblacionDesplazada,
        $esVictimaOtroTipoViolencia,
        $cualViolencia,
        $pesoIngreso,
        $tallaIngreso,
        $estadoNutricionalIngreso,
        $autorizaManejoInfo
    ) {
        $this->numeroDocumento = $numeroDocumento;
        $this->paisNacimiento = $paisNacimiento;
        $this->lugarNacimiento = $lugarNacimiento;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->nacimientoTermino = $nacimientoTermino;
        $this->mesesNacimiento = $mesesNacimiento;
        $this->parentescoConOtroFamiliar = $parentescoConOtroFamiliar;
        $this->tipologiaFamiliar = $tipologiaFamiliar;
        $this->esPoblacionDesplazada = $esPoblacionDesplazada;
        $this->esVictimaOtroTipoViolencia = $esVictimaOtroTipoViolencia;
        $this->cualViolencia = $cualViolencia;
        $this->pesoIngreso = $pesoIngreso;
        $this->tallaIngreso = $tallaIngreso;
        $this->estadoNutricionalIngreso = $estadoNutricionalIngreso;
        $this->autorizaManejoInfo = $autorizaManejoInfo;
    }
    public function saveInformacionInstitucional()
    {
        try {
            $numeroDocumento = $this->getNumeroDocumento();
            $paisNacimiento = $this->getPaisNacimiento();
            $lugarNacimiento = $this->getLugarNacimiento();
            $fechaNacimiento = $this->getFechaNacimiento();
            $nacimientoTermino = $this->getNacimientoTermino();
            $mesesNacimiento = $this->getMesesNacimiento();
            $parentescoConOtroFamiliar = $this->getParentescoConOtroFamiliar();
            $tipologiaFamiliar = $this->getTipologiaFamiliar();
            $esPoblacionDesplazada = $this->getEsPoblacionDesplazada();
            $esVictimaOtroTipoViolencia = $this->getEsVictimaOtroTipoViolencia();
            $cualViolencia = $this->getCualViolencia();
            $pesoIngreso = $this->getPesoIngreso();
            $tallaIngreso = $this->getTallaIngreso();
            $estadoNutricionalIngreso = $this->getEstadoNutricionalIngreso();
            $autorizaManejoInfo = $this->getAutorizaManejoInfo();


            $sql = $this->dbConnection->prepare(
                'UPDATE beneficiarios
                SET
                pais_nacimiento = :pais_nacimiento,
                lugar_nacimiento = :lugar_nacimiento,
                fecha_nacimiento = :fecha_nacimiento,
                nacimiento_termino = :nacimiento_termino,
                cantidad_meses_nacimiento = :cantidad_meses_nacimiento,
                parentesco_otro_familiar = :parentesco_otro_familiar, 
                tipologia_familiar = :tipologia_familiar,
                poblacion_desplazada = :poblacion_desplazada,
                victima_otro_tipo_violencia = :victima_otro_tipo_violencia,
                cual_violencia = :cual_violencia,
                peso_ingreso = :peso_ingreso,
                talla_ingreso = :talla_ingreso,
                estado_nutricional_ingreso = :estado_nutricional_ingreso,
                autoriza_manejo_informacion = :autoriza_manejo_informacion
                WHERE numero_documento = :numero_documento'
            );

            $sql->bindParam(':pais_nacimiento', $paisNacimiento);
            $sql->bindParam(':lugar_nacimiento', $lugarNacimiento);
            $sql->bindParam(':fecha_nacimiento', $fechaNacimiento);
            $sql->bindParam(':nacimiento_termino', $nacimientoTermino);
            $sql->bindParam(':cantidad_meses_nacimiento', $mesesNacimiento);
            $sql->bindParam(':parentesco_otro_familiar', $parentescoConOtroFamiliar);
            $sql->bindParam(':tipologia_familiar', $tipologiaFamiliar);
            $sql->bindParam(':poblacion_desplazada', $esPoblacionDesplazada);
            $sql->bindParam(':victima_otro_tipo_violencia', $esVictimaOtroTipoViolencia);
            $sql->bindParam(':cual_violencia', $cualViolencia);
            $sql->bindParam(':peso_ingreso', $pesoIngreso);
            $sql->bindParam(':talla_ingreso', $tallaIngreso);
            $sql->bindParam(':estado_nutricional_ingreso', $estadoNutricionalIngreso);
            $sql->bindParam(':autoriza_manejo_informacion', $autorizaManejoInfo);
            $sql->bindParam(':numero_documento', $numeroDocumento);

            $sql->execute();
        } catch (Error $e) {
            echo $e;
        }
    }

    public function saveInformacionGeneral()
    {
        try {
            $estado = $this->getEstado();
            $primerNombre = $this->getPrimerNombre();
            $segundoNombre = $this->getSegundoNombre();
            $primerApellido = $this->getPrimerApellido();
            $segundoApellido = $this->getSegundoApellido();
            $tipoDocumento = $this->getTipoDocumento();
            $numeroDocumento = $this->getNumeroDocumento();
            $estadoCivil = $this->getEstadoCivil();
            $fechaInscripcion = $this->getFechaInscripcion();

            $sql = $this->dbConnection->prepare(
                'INSERT INTO beneficiarios (
                estado,
                primer_nombre,
                segundo_nombre,
                primer_apellido,
                segundo_apellido,
                tipo_documento,
                numero_documento,
                estado_civil,
                fecha_inscripcion
                ) 
                VALUES (
                :estado,
                :primer_nombre, 
                :segundo_nombre,
                :primer_apellido,
                :segundo_apellido,
                :tipo_documento,
                :numero_documento,
                :estado_civil,
                :fecha_inscripcion
                )'
            );
            $sql->bindParam(':estado', $estado);
            $sql->bindParam(':primer_nombre', $primerNombre);
            $sql->bindParam(':segundo_nombre', $segundoNombre);
            $sql->bindParam(':primer_apellido', $primerApellido);
            $sql->bindParam(':segundo_apellido', $segundoApellido);
            $sql->bindParam(':tipo_documento', $tipoDocumento);
            $sql->bindParam(':numero_documento', $numeroDocumento);
            $sql->bindParam(':estado_civil', $estadoCivil);
            $sql->bindParam(':fecha_inscripcion', $fechaInscripcion);
            $sql->execute();
        } catch (Error $e) {
            echo $e;
        }
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
     * Get the value of parentescoConOtroFamiliar
     */
    public function getParentescoConOtroFamiliar()
    {
        return $this->parentescoConOtroFamiliar;
    }

    /**
     * Set the value of parentescoConOtroFamiliar
     *
     * @return  self
     */
    public function setParentescoConOtroFamiliar($parentescoConOtroFamiliar)
    {
        $this->parentescoConOtroFamiliar = $parentescoConOtroFamiliar;

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

    /**
     * Get the value of fk_tipoPoblacion
     */
    public function getFk_tipoPoblacion()
    {
        return $this->fk_tipoPoblacion;
    }

    /**
     * Set the value of fk_tipoPoblacion
     *
     * @return  self
     */
    public function setFk_tipoPoblacion($fk_tipoPoblacion)
    {
        $this->fk_tipoPoblacion = $fk_tipoPoblacion;

        return $this;
    }

    /**
     * Get the value of fk_pertenenciaEtnica
     */
    public function getFk_pertenenciaEtnica()
    {
        return $this->fk_pertenenciaEtnica;
    }

    /**
     * Set the value of fk_pertenenciaEtnica
     *
     * @return  self
     */
    public function setFk_pertenenciaEtnica($fk_pertenenciaEtnica)
    {
        $this->fk_pertenenciaEtnica = $fk_pertenenciaEtnica;

        return $this;
    }

    /**
     * Get the value of fk_grupoEtario
     */
    public function getFk_grupoEtario()
    {
        return $this->fk_grupoEtario;
    }

    /**
     * Set the value of fk_grupoEtario
     *
     * @return  self
     */
    public function setFk_grupoEtario($fk_grupoEtario)
    {
        $this->fk_grupoEtario = $fk_grupoEtario;

        return $this;
    }

    /**
     * Get the value of lugarNa$lugarNacimiento
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set the value of lugarNa$lugarNacimiento
     *
     * @return  self
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }

    /**
     * Get the value of paisNacimiento
     */
    public function getPaisNacimiento()
    {
        return $this->paisNacimiento;
    }

    /**
     * Set the value of paisNacimiento
     *
     * @return  self
     */
    public function setPaisNacimiento($paisNacimiento)
    {
        $this->paisNacimiento = $paisNacimiento;

        return $this;
    }
}
