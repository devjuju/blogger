<?php

namespace App\Core;

// On "importe" PDO
use \PDO;
use \PDOException;

class Database extends PDO
{
    // Instance unique de la classe
    private static $instance;

    // Informations de connexion
    private const MYSQL_HOST = 'localhost';
    private const MYSQL_PORT = 8889;
    private const MYSQL_NAME = 'partage_de_recettes';
    private const MYSQL_USER = 'root';
    private const MYSQL_PASSWORD = 'Mypass8035macarm';

    private function __construct()
    {
        // DSN de connexion
        $_dsn = 'mysql:dbname='. self::MYSQL_NAME . ';host=' . self::MYSQL_HOST;';port=' . self::MYSQL_PORT;

        // On appelle le constructeur de la classe PDO
        //try{
            parent::__construct($_dsn, self::MYSQL_USER, self::MYSQL_PASSWORD);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //}catch(PDOException $e){
            //die($e->getMessage());
        //}
    }


    public static function getInstance():self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}