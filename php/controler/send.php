<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 21/09/2017
 * Time: 14:37
 */


include ('../conexao/conection.php');

if (isset($_POST)){

    $query = "INSERT INTO pessoa (
                          pessoa_Nome,
                          pessoa_profissao,
                          pessoa_num_doc,
                          pessoa_telefone,
                          pessoa_num_diario,
                          pessoa_representante,
                          pais_pais_id,
                          distrito_distrito_id,
                          tipodoc_doc_id,
                          tipo_pessoa_tipopess_id,
                          pessoa_morada,
                          pessoa_email,
                          pessoa_pass) 
               VALUES(:nome,:profissao,:numero,:telefone,:numDiario,:nomeRepresentante,:nacionalidade,:distrito,:documento,:tipoPess,:residencia,:email, :pass)";

    $statement = $conection ->prepare($query);

    /*$distrito = ((!isset($_POST['distrito'])) ? null : $_POST['distrito']);
    $nacionalidade = ((!isset($_POST['nacionalidade'])) ? null : $_POST['nacionalidade']);
    $documento = ((!isset($_POST['doc'])) ? null : $_POST['doc']);*/

    $distrito = ((!isset($_POST['distrito'])) ? null : 5);
    $nacionalidade = ((!isset($_POST['nacionalidade'])) ? null : 193);
    $documento = ((!isset($_POST['doc'])) ? null : 2);
    $pass = md5($_POST['pass']);

    $statement -> bindParam(":nome", $_POST['name']);
    $statement -> bindParam(":profissao", $_POST['profissao']);
    $statement -> bindParam(":numero", $_POST['numDoc']);
    $statement -> bindParam(":telefone", $_POST['telefone']);
    $statement -> bindParam(":numDiario", $_POST['numDiario']);
    $statement -> bindParam(":nomeRepresentante", $_POST['nameRepresentant']);
    $statement -> bindParam(":nacionalidade", $nacionalidade);
    $statement -> bindParam(":distrito", $distrito);
    $statement -> bindParam(":documento", $documento);
    $statement -> bindParam(":tipoPess", $_POST['tipoPess']);
    $statement -> bindParam(":residencia", $_POST['residencia']);
    $statement -> bindParam(":email", $_POST['email']);
    $statement -> bindParam(":pass", $pass);

    $statement->execute();

    if (!empty($statement)){
        echo '<h4>Sucesso!</h4> O seu registro foi efetuado com sucesso.';
    }
    else{
        echo 'erro na Inserção';
    }

}
