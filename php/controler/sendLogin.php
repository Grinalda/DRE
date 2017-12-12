<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 27/09/2017
 * Time: 15:23
 */
session_start();
include ('../conexao/conection.php');

if (isset($_POST)){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM pessoa WHERE pessoa_email = '".$email."' and pessoa_pass = '".$password."'";
    $statement = $conection ->prepare($query);
    $statement->execute();
   // $data = $statement ->fetchAll();

    if ($statement -> rowCount()> 0){
        $data = $statement ->fetch();
        $_SESSION["sessao"] = $data;
        print_r ($data);
    }
}

