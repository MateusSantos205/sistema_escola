<?php
    
try {
    include 'include/conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // BINARY ativa o case sensitive
    $sql = "SELECT email,senha FROM tb_usuarios WHERE email= '$email' AND BINARY senha='$senha'";

    $comando = $conexao->prepare($sql);
    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

// se o usuario e senha estiverem corretos
    if($dados !=null){
        session_start();

        // cria uma var de sessao email e atribui valor
        $_SESSION['email']=$email;

        // monta um array para ser convertido em JSON
        $retorno = array("retorno"=> "ok","mensagem"=> "Login efetuado com sucesso!");
    }else{
        $retorno = array("retorno"=> "erro","mensagem"=> "Dados inválidos!");
    }
    
} catch (PDOException $erro) {

    $retorno = array("retorno"=> "erro","mensagem"=> $erro->getMessage());

}

$json = json_encode($retorno,JSON_UNESCAPED_UNICODE);
echo $json;

$con=null;
    
?>