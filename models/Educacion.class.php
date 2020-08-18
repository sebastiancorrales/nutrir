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
        $this->table = 'educacion';
        parent::__construct();
    }

    public function create(
        $sabeLeerEscribir,
        $nivelEducativo,
        $estudiaActualmente,
        $gradoQueCursaActualmente,
        $jornadaEstudio,
        $realizadoAlgunCurso,
        $cualCurso
    ) {

        $this->sabeLeerEscribir = $sabeLeerEscribir;
        $this->nivelEducativo = $nivelEducativo;
        $this->estudiaActualmente = $estudiaActualmente;
        $this->gradoQueCursaActualmente = $gradoQueCursaActualmente;
        $this->jornadaEstudio = $jornadaEstudio;
        $this->realizadoAlgunCurso = $realizadoAlgunCurso;
        $this->cualCurso = $cualCurso;
    }
    public function save($id)
    {
        $sabeLeerEscribir = $this->getSabeLeerEscribir();
        $nivelEducativo = $this->getNivelEducativo();
        $estudiaActualmente = $this->getEstudiaActualmente();
        $gradoQueCursaActualmente = $this->getGradoQueCursaActualmente();
        $jornadaEstudio = $this->getJornadaEstudio();
        $realizadoAlgunCurso = $this->getRealizadoAlgunCurso();
        $cualCurso = $this->getCualCurso();
        $sql = $this->dbConnection->prepare('INSERT INTO educacion
        (sabe_leer_escribir,
        nivel_educativo,
        estudia_actualmente,
        grado_que_cursa,
        jornada_estudio,
        realiza_algun_curso,
        cual_curso,
        beneficiario_id)
        VALUES(?,?,?,?,?,?,?,?)
        ');
        $sql->bindParam(1, $sabeLeerEscribir);
        $sql->bindParam(2, $nivelEducativo);
        $sql->bindParam(3, $estudiaActualmente);
        $sql->bindParam(4, $gradoQueCursaActualmente);
        $sql->bindParam(5, $jornadaEstudio);
        $sql->bindParam(6, $realizadoAlgunCurso);
        $sql->bindParam(7, $cualCurso);
        $sql->bindParam(8, $id);

        $sql->execute();
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
