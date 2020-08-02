<?php
include_once 'config/dbConfig.php';
abstract class Connection
{
    // Atributo que contiene la conexión a la BD con PDO
    protected $dbConnection;

    public function __construct()
    {
        try {
            // Se crea un objeto de la clase PDO para la conexión a la BD
            $this->dbConnection = new PDO(
                DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME,
                DB_USER,
                DB_PASS,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
}
