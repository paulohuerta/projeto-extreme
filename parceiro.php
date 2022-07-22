<?php


    if(isset($_POST['submit'])){
         include_once('config.php');
         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['genero'];
         $data_nasc = $_POST['data_nascimento'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $endereco = $_POST['endereco'];

         $result = mysqli_query($conexao, "INSERT INTO pessoa(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parceito</title>
    <link rel="stylesheet" href="Meus Estilos.css">
</head>
<body>
    <h1>Obrigado por pela sua parceria, vamos fazer fortes alianças para conquistarmos mais clientes</h1>
    <HEader>
        <nav>
            <a href="links.html">Links para downloads</a>
            <a href="treinamento.html">Videos para treinamentos</a>
        </nav>

        <section>
            <div class="box">
                <form action="parceiro.php" method="POST">
                    <fieldset>
                        <legend><b>Formulário de Inscrição</b></legend>
                        <div class="inputBox">
                            <input type="text" name = "nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome completo</label>
                        </div><br><br>
                        
                        <div class="inputBox">
                            <input type="text" name = "email" id="email" class="inputUser" required>
                            <label for="email"class="labelInput">E-mail</label>
                        </div><br><br>
                       
                        <div class="inputBox">
                            <input type="tel" name = "telefone" id="telefone" class="inputUser" required>
                            <label for="telefone"class="labelInput">Telefone</label>
                        </div><br>
                       
                        <p id="sexo">Sexo:</p>
                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                        <label for="feminino">Feminino/label>
                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label><br><br>
                                                
                        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        <input type="date" name = "data_nascimento" id="data_nascimento" required>
                        <br><br><br>
                       
                        <div class="inputBox">
                            <input type="text" name = "cidade" id="cidade" class="inputUser" required>
                            <label for="telefone"class="labelInput">Cidade</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="text" name = "estado" id="estado" class="inputUser" required>
                            <label for="telefone"class="labelInput">Estado</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="text" name = "endereco" id="endereco" class="inputUser" required>
                            <label for="telefone"class="labelInput">Endereço</label>
                        </div><br><br>

                       <!-- <div class="inputBox">
                            <input type="password" name = "senha" id="isenha" class="inputUser" required>
                            <label for="senha">Senha</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="password" name = "confsenha" id="iconfsenha" class="inputUser" required>
                            <label for="confsenha">Confirmar Senha</label>
                        </div><br><br>
                        -->
                        <input type="submit" name="submit" id="submit">
                    </fieldset>
                </form>
            </div>
        </section>
    </HEader>
    
    <h3><a href="index.html" rel="prev">Home</a></h3>
    
</body>
</html>