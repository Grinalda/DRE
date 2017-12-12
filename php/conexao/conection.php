<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 08/09/2017
 * Time: 05:18
 */

/*$dbhost = '10.222.2.42';
$dbname = 'justica_db';
$dbuser = 'justica_sa';
$dbpass = '@Justica*2019€';*/

$dbhost = 'localhost';
$dbname = 'gip';
$dbuser = 'root';
$dbpass = '';


try{
    $conection = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conection->exec("SET CHARACTER SET utf8");
}catch(PDOException $ex){

    die($ex->getMessage());
}
