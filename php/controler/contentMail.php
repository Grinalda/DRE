<?php
/**
 * Created by PhpStorm.
 * User: Grinalda Soares
 * Date: 03/10/2017
 * Time: 15:36
 */

$content = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>send email</title>
    <link href="../../admin/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../admin/html/css/style.css" rel="stylesheet">
</head>
<style>
    .content{
        background: #c0c0c0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 5rem 0;
    }
    .content img{
        width: 25rem; height: 18rem;
    }
    .content div{
        width: 50%;
        margin-top: 2rem;
    }
    .content div p{
        font-size: 1.5rem;
    }
    .content div span{
        margin-top: 1rem;
        display: flex;
        flex-direction: column;
    }
    .content div span b{
        font-size: 1.1rem;
        color: #1b6d85;
    }
</style>
<body>
    <div class="content">
        <div>
            <p>Cara <b>'.$_SESSION["sessao"]['pessoa_Nome'].'</b>,</p>
            <p>Estamos muito felizes por teres usado a nossa plataforma para fazer uma <b>'.(($_POST["tipoParticipacao"] == '2') ? "reclamação" : (($_POST["tipoParticipacao"] == '3') ? "queixa" : "denúncia")).'</b>.</p>
            <p>No prazo máximo de <b> 10 dias</b>, entraremos em contacto consigo para lhe informar sobre o estado do seu processo.</p>
            <span>
                <b style="margin: 1rem 0">FICHA TÉCNICA: </b>
                <b>Serviço: Unidade de Inspeção da Administração Pública</b>
                <b>Avenida Marginal 12 de Julho, C.P 901, Água Grande - SÃO TOMÉ</b>
                <b>Telefone: +239 2221757</b>
                <b>Correio eletrónico:</b>
                <b>Sítio Internet: <a href="http://www.justica.gov.st/organiques/IGAP.php">www.justica.gov.st</a></b>

            </span>
        </div>
    </div>
</body>
</html>';

