<?php
include_once 'core\BaseModel.php';

class SeguridadSocial extends BaseModel
{
    private $nombreEps;
    private $tipoAfiliacion;
    private $tieneSisben;
    private $puntajeSisben;
    private $regimenSeguridadSocialId;
    private $diversidadFuncionalId;

    public function __construct()
    {
        $this->table = "seguridad_social";
        parent::__construct();
    }
    public function create(
        $nombreEps,
        $tipoAfiliacion,
        $tieneSisben,
        $puntajeSisben,
        $regimenSeguridadSocialId,
        $diversidadFuncionalId
    ) {
        $this->nombreEps = $nombreEps;
        $this->tipoAfiliacion = $tipoAfiliacion;
        $this->tieneSisben = $tieneSisben;
        $this->puntajeSisben = $puntajeSisben;
        $this->regimenSeguridadSocialId = $regimenSeguridadSocialId;
        $this->diversidadFuncionalId = $diversidadFuncionalId;
    }

    public function save($id)
    {
        $nombreEps = $this->getNombreEps();
        $tipoAfiliacion = $this->getTipoAfiliacion();
        $tieneSisben = $this->getTieneSisben();
        $puntajeSisben = $this->getPuntajeSisben();
        $regimenSeguridadSocialId = $this->getRegimenSeguridadSocialId();
        $diversidadFuncionalId = $this->getDiversidadFuncionalId();

        $sql = $this->dbConnection->prepare('INSERT INTO seguridad_social
        (
            nombre_eps,
            tipo_afiliacion,
            tiene_sisben,
            puntaje_sisben,
            regimen_seguridad_social_id,
            diversidad_funcional_id,
            beneficiario_id
        )
        VALUES(?,?,?,?,?,?,?)
        ');

        $sql->bindParam(1, $nombreEps);
        $sql->bindParam(2, $tipoAfiliacion);
        $sql->bindParam(3, $tieneSisben);
        $sql->bindParam(4, $puntajeSisben);
        $sql->bindParam(5, $regimenSeguridadSocialId);
        $sql->bindParam(6, $diversidadFuncionalId);
        $sql->bindParam(7, $id);

        $sql->execute();
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

    /**
     * Get the value of regimenSeguridadSocialId
     */
    public function getRegimenSeguridadSocialId()
    {
        return $this->regimenSeguridadSocialId;
    }

    /**
     * Set the value of regimenSeguridadSocialId
     *
     * @return  self
     */
    public function setRegimenSeguridadSocialId($regimenSeguridadSocialId)
    {
        $this->regimenSeguridadSocialId = $regimenSeguridadSocialId;

        return $this;
    }

    /**
     * Get the value of diversidadFuncionalId
     */
    public function getDiversidadFuncionalId()
    {
        return $this->diversidadFuncionalId;
    }

    /**
     * Set the value of diversidadFuncionalId
     *
     * @return  self
     */
    public function setDiversidadFuncionalId($diversidadFuncionalId)
    {
        $this->diversidadFuncionalId = $diversidadFuncionalId;

        return $this;
    }
}
