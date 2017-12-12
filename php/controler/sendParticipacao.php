<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 02/10/2017
 * Time: 06:02
 */

$intent['RegistroParticipacao'] = function (){

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

    $query = "INSERT INTO participacao (
                          participacao_quem,
                          participacao_data_ocorrencia,
                          participacao_local,
                          participacao_descricao,
                          participacao_testemunhas,
                          participacao_prova,
                          tipo_participacao_tipopar_id,
                          pessoa_pessoa_Id)
              VALUES (:quem, :dataOcorencia, :localParticipacao, :descricao, :testemunha, 'Sem provas', :tipoPartcipacao, :pessoa)";

    $statement = $conection ->prepare($query);

    /*$distrito = ((isset($_POST['distrito'])) ? null : $_POST['distrito']);*/

    $statement -> bindParam(":quem", $_POST['nomePessoa']);
    $statement -> bindParam(":dataOcorencia", $_POST['dataOcorencia']);
    $statement -> bindParam(":localParticipacao", $_POST['local']);
    $statement -> bindParam(":descricao", $_POST['descricao']);
    $statement -> bindParam(":testemunha", $_POST['testemunha']);
//    $statement -> bindParam(":prova", $_POST['ficheiro']);
    $statement -> bindParam(":tipoPartcipacao", $_POST['tipoParticipacao']);
    $statement -> bindParam(":pessoa", $_POST['pessoa']);

    $statement->execute();

    if (!empty($statement)){
        echo '<h4>Sucesso!</h4> O seu registro foi efetuado com sucesso, <br> Em breve entraremos em contacto consigo.';
        sendMail();
    }
    else{
        echo 'erro na Inserção';
    }

};


$intent["uploadFile"] = function (){
    $uploadDir  = "../../resources/image/filesParticipacao";
    $tmpFile = $_FILES['file']['tmp_name'];
    $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
    move_uploaded_file($tmpFile,$filename);

    die(json_encode(["fileName" => $_FILES['file']['name'], "newFileName" => $filename]));
};

$intent[$_POST["intent"]]();


function sendMail(){
    session_start();
    include "../PHPMailer-master/PHPMailerAutoload.php";
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    include "contentMail.php";

    try {
        $mail->CharSet = "UTF-8";

        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output1
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'informaticajustica@gmail.com';                 // SMTP username
        $mail->Password = 'Info#Justica2017';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('informaticajustica@gmail.com', 'Portal de Reclamação');
        $mail->addAddress($_SESSION["sessao"]['pessoa_email'], $_SESSION["sessao"]['pessoa_Nome']);     // Add a recipient
        /*$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');*/

        //Attachments
/*        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments*/
        /*$mail->addAttachment('../../resources/image/logo.png', 'Logo MJAPDH.png');*/    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Confirmação de Registro no Portal de Reclamação';
        $mail->Body    = $content;
        file_put_contents("send_mail.html", $content);
//        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
