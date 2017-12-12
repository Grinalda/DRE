<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 08/09/2017
 * Time: 05:29
 */

include ('../conexao/conection.php');


if (isset($_POST["distrito"])){
    $output ='';
    $query = "SELECT * FROM distrito ORDER BY  distrito_descricao";

    $statement = $conection ->prepare($query);
    $statement->execute();
    $data = $statement ->fetchAll();
    $output .= '<option value="">--Selecione--</option>';
    foreach ($data as $row){
        $output .= '<option value="'.$row["distrito_id"].'">'.$row["distrito_descricao"].'</option>';
    }

    die($output);
}

if (isset($_POST["pais"])){
    $output ='';
    $query = "SELECT * FROM pais ORDER BY  pais_nomeCurto";

    $statement = $conection ->prepare($query);
    $statement->execute();
    $data = $statement ->fetchAll();
    $output .= '<option value="">--Selecione--</option>';
    foreach ($data as $row){
        $output .= '<option value="'.$row["pais_id"].'">'.$row["pais_nomeCurto"].'</option>';
    }
    die($output);
}

if (isset($_POST["doc"])){
    $output ='';
    $query = "SELECT * FROM tipodoc ORDER BY  doc_descricao";

    $statement = $conection ->prepare($query);
    $statement->execute();
    $data = $statement ->fetchAll();
    $output .= '<option value="">--Selecione--</option>';
    foreach ($data as $row){
        $output .= '<option value="'.$row["doc_id"].'">'.$row["doc_descricao"].'</option>';
    }

    die($output);
}


