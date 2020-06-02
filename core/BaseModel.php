<?php
include_once 'Connection.php';
class BaseModel extends Connection
{

    protected $table;

    public function __construct()
    {
        // Se llama al constructor de la clase Padre
        parent::__construct();
    }

    public function getAll()
    {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM ".$this->table);
            
            // Ejecutamos
            $sql->execute();
            $resultSet = null;
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            return $resultSet;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    /*
    * Aqui podemos incluir los demás métodos que nos ayuden
    * a hacer operaciones con la base de datos de forma común
    */
}


?>