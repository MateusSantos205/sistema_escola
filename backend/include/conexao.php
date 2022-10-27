<?php

try{

    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('SENHA','');
    define('BASEDADOS','db_escola');

    $conexao = new PDO("mysql:host=".SERVIDOR.";dbname=".BASEDADOS.";charset=utf8", USUARIO, SENHA);

    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $erro){
    $retorno = array("retorno"=> "erro","mensagem"=> $erro->getMessage());
    $json = json_encode($retorno,JSON_UNESCAPED_UNICODE);
    echo $json;
    exit;
}

?>