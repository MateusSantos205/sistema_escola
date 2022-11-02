<?php
include 'include/conexao.php';

try{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $tipo = $_POST['tipo'];

    // endereço

    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $complemento = $_POST['complemento'];

    // remove as barras da senha
    $senha = sha1($data_nascimento);


}catch (PDOException $erro){

}
