<?php

// controle de sessãp
session_start();


// isset verifica de uma var existe
// se a var sessão email nao estiver setada o usuario sera redirecionado para o login / somente é permitido acesso a essa pagina se a sessao foi iniciada

if (!isset($_SESSION['email'])) {
    header('location: ../');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Sistema Escola</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style-admin.css">
</head>

<body>
    <div class="container">
        <aside class="admin-menu">
            <div class="admin-logo">Sistema - ADMIN</div>
            <nav>
                <ul>
                    <li>
                        <a href="index.php" class="menu-ativo"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="professores.php"><i class="fa-solid fa-chalkboard-user"></i> Professores</a>
                    </li>
                    <li>
                        <a href="alunos.php"><i class="fa-solid fa-graduation-cap"></i> Alunos</a>
                    </li>
                    <li>
                        <a href="notas.php"><i class="fa-solid fa-file"></i> Notas</a>
                    </li>

                    <hr>

                    <li>
                        <a href="../backend/logout.php"><i class="fa-solid fa-power-off"></i> Sair </a>
                    </li>
                </ul>

            </nav>

            <!-- <div class="admin_logout"> 
            </div> -->

        </aside>

        <!-- aqui sera o conteudo da pag -->
        <main class="admin-corpo">
            <h2>Gestão de Professores</h2>
            <div class="div-professores">

                <form action="" id="form-professores">

                    <div class="grid-professores">
                        <div>
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome">
                        </div>

                        <div>
                            <label for="email">email</label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div>
                            <label for="telefone">telefone</label>
                            <input type="text" name="telefone" id="telefone">
                        </div>

                        <div>
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf">
                        </div>

                        <div>
                            <label for="cep">CEP</label>

                            <div>
                                <input class="input-cep" type="text" onclick="consultaCep()" name="cep" id="cep">
                                <button class="btn-cep" type="button"><i class="fa-solid fa-magnifying-glass"></i> </button>
                            </div>

                        </div>

                        <div>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" id="rua">
                        </div>

                        <div>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro">
                        </div>

                        <div>
                            <label for="rua">Número</label>
                            <input type="text" name="numero" id="numero">
                        </div>

                        <div>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade">
                        </div>

                        <div>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" id="estado">
                        </div>

                        <div>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento">
                        </div>


                    </div>
                    <button class="btn-cadastrar" type="button" onclick="addProfessor()">Cadastrar</button>


                </form>

            </div>

        </main>
    </div>
    <script src="assets/js/script-admin.js"></script>
</body>

</html>