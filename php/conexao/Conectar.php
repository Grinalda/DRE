<?php

/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 07/11/2017
 * Time: 15:50
 */
class Conectar
{
    private $dbhost = "localhost";
    private $dbname = "gip";
    private $dbuser = "root";
    private $dbpass ="";
    private $conection;
    /**
     * Conectar constructor.
     */
    public function __construct()
    {
        try{
            $this->conection = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname}",$this->dbuser,
                $this->dbpass);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conection->exec("SET CHARACTER SET utf8");
        }catch(PDOException $ex){

            die($ex->getMessage());
        }
    }

     function getConnection(){
        return $this->conection;
    }
}