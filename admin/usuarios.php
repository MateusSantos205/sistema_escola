<?php
 include 'include/controle-sessao.php';
?>

<?php

        include 'include/header.php';

?>

        <!-- ASIDE -->
        <?php
            include 'include/aside.php';
        ?>
    <!-- FINAL ASIDE -->

        <!-- aqui sera o conteudo da pag -->
        <main class="admin-corpo">
            <div class="div-professores">

                <div class="tabs">
                    <div class="titulo-principal tab-ativo" onclick="abaCadastro()">
                        <p class="titulo-texto">Cadastro de Usuários</p>
                    </div>

                    <div class="titulo-principal" onclick="abaListagem()">
                        <p class="titulo-texto">Listagem</p>
                    </div>
                </div>

                <fieldset>
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
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input type="date" name="data_nascimento" id="data_nascimento">
                            </div>

                            <div>
                                <label for="tipo">Tipo</label>
                                <select name="tipo" id="tipo">
                                    <option value="tipo" disabled selected>Selecione...</option>

                                </select>
                            </div>

                            <div>
                                <label for="cep">CEP</label>
                                <div class="div-cep">
                                    <input class="input-cep" type="text" name="cep" id="cep">
                                    <button class="btn-cep" type="button" onclick="consultaCep()"><i class="fa-solid fa-magnifying-glass"></i> </button>
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
                                <!-- <input type="text" name="estado" id="estado"> -->
                                <select id="estado" name="estado">
                                    <option value="" disabled selected>Selecione...</option>

                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                            </div>

                            <div>
                                <label for="complemento">Complemento</label>
                                <input type="text" name="complemento" id="complemento">
                            </div>




                        </div>
                        <button class="btn-cadastrar" type="button" onclick="addUsuarios()">Cadastrar</button>

                    </form>

                    <div id="div-listagem">
                            <h4>Listagem de Usuários</h4>

                            <form id="form-listagem">
                                <div>
                                    <label for="">Pesquisar Usuários</label>
                                    <div class="div-cep">
                                        <input class=" input-cep" type="text" name="pesquisar" id="pesquisar">
                                        <button class="btn-cep" type="button" onclick="pesquisarUsuario()"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </form> 

                            <div id="resultado-listagem">

                            
                                
                            </div>

                        </div>


                </fieldset>


            </div>
            </fieldset>

        </main>
    
         <!-- footer -->

         <?php
            include 'include/footer.php';
        ?>