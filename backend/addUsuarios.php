<?php
include 'include/conexao.php';

try{

    $limpa = array('.','-','(',')',' ');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = str_replace($limpa,'',$_POST['telefone']);
    $cpf = str_replace($limpa,'',$_POST['cpf']);
    $data_nascimento = $_POST['data_nascimento'];
    $tipo = $_POST['tipo'];

    // endereço

    $cep = str_replace($limpa,'',$_POST['cep']);
    $rua = $_POST['rua'];
    $numero = str_replace($limpa,'',$_POST['numero']);
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $complemento = $_POST['complemento'];

    // converte a data para o formato 01-10-2000
    // $senha = implode('-', array_reverse(explode('-', $data_nascimento)));

    // coverte a data e remove o separador (-) 01102000
    $senha = date('dmy', strtotime($data_nascimento));

    $senha = sha1($senha);

    // atençao
    // necessario implementar validaçao de campos vazios
    // necessario implementar validaçao de cpf email 

    // inserção dos dados do usuario na tb_usuarios

    $sql = "INSERT INTO tb_usuarios(nome,email,cpf,telefone,data_nascimento,senha,id_tipos)VALUES('$nome','$email','$cpf','$telefone','$data_nascimento','$senha','$tipo')";

    $comando = $con->prepare($sql);
    
    $comando->execute();

    // captura o id da tabela do comando executado acima
    // necessario esse id para insert na tabela

    $id_usuario = $con->lastInsertId();

    // ======================================== ENDEREÇO ======================================================

    // CADASTRA O ENDEREÇO NA TABELA ENDEREÇO

    $sql = "INSERT INTO tb_enderecos(rua,bairro,numero,cep,cidade,estado,complemento,id_usuarios)VALUES('$rua','$bairro','$numero','$cep','$cidade','$estado','$complemento',$id_usuario)";
    
    $comando = $con->prepare($sql);
    
    $comando->execute();

    $retorno = array("retorno"=>"ok","mensagem"=>"Usuário inserido com sucesso!");

}catch (PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());

   
}
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

    $con = null;
