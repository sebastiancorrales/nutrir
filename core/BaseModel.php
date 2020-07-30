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

    public function all()
    {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM " . $this->table);

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
    public function delete($id)
    {
        try {
            $sql = $this->dbConnection->prepare("DELETE FROM $this->table WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    public function get($id){
        try {
            $sql = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
            $resultSet = null;
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            return $resultSet[0];
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
}
