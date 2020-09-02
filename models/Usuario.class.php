<?php
include_once 'core\BaseModel.php';

class Usuario extends BaseModel
{
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $tipoDocumento;
    private $numeroDocumento;
    private $numeroCelular;
    private $profesion;
    private $foto;

    public function __construct($nom = null,$apell = null ,$email = null, $pass= null, $tipoDocumento= null, $numeroDocumento= null, $numeroCelular= null, $profesion= null, $foto = null)
    {
        $this->table = 'users';
        $this->nombre = $nom;
        $this->apellido = $apell;
        $this->email = $email;
        $this->password = password_hash($pass, PASSWORD_BCRYPT);
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
        $this->numeroCelular = $numeroCelular;
        $this->profesion = $profesion;
        $this->foto = $foto;
        parent::__construct();
    }
    public function save()
    {
        try {
            $nombre = $this->getNombre();
            $apellido = $this->getApellido();
            $email = $this->getEmail();
            $password = $this->getPassword();
            $tipoDocumento = $this->getTipoDocumento();
            $numeroDocumento = $this->getNumeroDocumento();
            $numeroCelular = $this->getNumeroCelular();
            $profesion = $this->getProfesion();
            $foto = $this->getFoto();
            $sql = $this->dbConnection->prepare(
                'INSERT INTO users (nombre, apellido, email, password, tipo_documento, numero_documento, celular, profesion, foto) 
                 VALUES (:nombre, :apellido , :email, :password, :tipo_documento, :numero_documento, :celular, :profesion, :foto)'
            );
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':apellido', $apellido);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':password', $password);
            $sql->bindParam(':tipo_documento', $tipoDocumento);
            $sql->bindParam(':numero_documento', $numeroDocumento);
            $sql->bindParam(':celular', $numeroCelular);
            $sql->bindParam(':profesion', $profesion);
            $sql->bindParam(':foto', $foto);

            $sql->execute();
        } catch (Error $e) {
            echo $e;
        }
    }
    public function validarLogin()
    {
        try
        {
            $sql = $this->dbConnection->prepare("SELECT * FROM users WHERE email = ?");
            $email = $this->getEmail();
            $sql->bindParam(1, $email);
            // ejecutamos
            $sql->execute();
            $resulSet = array();
            // Ahora vamos a indicar el fecth mode cuando llamamos a fetch_
            while($row = $sql->fetch(PDO::FETCH_OBJ)){
                $resulSet[] = $row;
            }
            // Si encuentra el usuario
            if(count($resulSet) > 0 ){              
                $contra = $this->password;
                $hash = $resulSet[0]->password;
                if (password_verify($contra, $hash )) {                                      
                    $_SESSION['nombre'] = $resulSet[0]->nombre;
                    $_SESSION['id_usuario']= $resulSet[0]->id;
                    $_SESSION['timeout']= time();
                    session_regenerate_id();
                    return true;
                }
            }
            return false;
        } catch(PDOException $ex){
            echo $ex->getMessage();
            die();
        }
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

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
     * Get the value of numeroCelular
     */ 
    public function getNumeroCelular()
    {
        return $this->numeroCelular;
    }

    /**
     * Set the value of numeroCelular
     *
     * @return  self
     */ 
    public function setNumeroCelular($numeroCelular)
    {
        $this->numeroCelular = $numeroCelular;

        return $this;
    }

    /**
     * Get the value of profesion
     */ 
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set the value of profesion
     *
     * @return  self
     */ 
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }
}
