<?php

include_once "include/conexao.php";

try{
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    $sql = "SELECT 
                email 
            FROM 
                tb_usuarios 
            WHERE 
                email='$email' 
            AND 
                BINARY
                senha = '$senha'
            AND 
                ativo = 1
                
            ";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

   
    if($dados != null){
        session_start();
        $_SESSION['email'] = $email;
        
        $retorno = array("retorno"=>"ok","mensagem"=>"Login realizado com sucesso!"); 
    }else{
        $retorno = array("retorno"=>"erro","mensagem"=>"Dados inválidos!");
    }

}catch(PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());
}

$json = json_encode($retorno,JSON_UNESCAPED_UNICODE);
echo $json;
