<?php
include_once 'core\BaseModel.php';

class ProgramasSociales extends BaseModel
{
    private $inscritoEnOtroPrograma;
    private $quePorgrama;
    private $algunTipoSubsidio;
    private $cualSubsidio;
    private $ingresosRecibidos;

    public function __construct()
    {
        $this->table = "programas_sociales";
        parent::__construct();
    }

    public function create($inscritoEnOtroPrograma, $quePorgrama = null, $algunTipoSubsidio = null, $cualSubsidio = null, $ingresosRecibidos = null)
    {
        $this->inscritoEnOtroPrograma = $inscritoEnOtroPrograma;
        $this->quePorgrama = $quePorgrama;
        $this->algunTipoSubsidio = $algunTipoSubsidio;
        $this->cualSubsidio = $cualSubsidio;
        $this->ingresosRecibidos = $ingresosRecibidos;
    }
    public function save($id)
    {
        $inscritoEnOtroPrograma = $this->getInscritoEnOtroPrograma();
        $quePorgrama = $this->getQuePorgrama();
        $algunTipoSubsidio = $this->getAlgunTipoSubsidio();
        $cualSubsidio = $this->getCualSubsidio();
        $ingresosRecibidos = $this->getIngresosRecibidos();
        $sql = $this->dbConnection->prepare('INSERT INTO programas_sociales
        (inscrito_otro_programa, que_programa, algun_tipo_subsidio, cual_subsidio, ingresos_recibidos, beneficiario_id)
        VALUES (?,?,?,?,?,?)');

        $sql->bindParam(1, $inscritoEnOtroPrograma);
        $sql->bindParam(2, $quePorgrama);
        $sql->bindParam(3, $algunTipoSubsidio);
        $sql->bindParam(4, $cualSubsidio);
        $sql->bindParam(5, $ingresosRecibidos);
        $sql->bindParam(6, $id);
        $sql->execute();
    }

    /**
     * Get the value of incritoEnOtroPrograma
     */


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

    /**
     * Get the value of inscritoEnOtroPrograma
     */
    public function getInscritoEnOtroPrograma()
    {
        return $this->inscritoEnOtroPrograma;
    }

    /**
     * Set the value of inscritoEnOtroPrograma
     *
     * @return  self
     */
    public function setInscritoEnOtroPrograma($inscritoEnOtroPrograma)
    {
        $this->inscritoEnOtroPrograma = $inscritoEnOtroPrograma;

        return $this;
    }
}
