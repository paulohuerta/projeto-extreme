<?php

if(isset($_POST['submit'])){
     
        include_once('config.php');
         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $confemail = $_POST['confemail'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['genero'];
         $data_nasc = $_POST['data_nascimento'];
         $endereco = $_POST['endereco'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $senha = $_POST['senha'];
         $confsenha = $_POST['confsenha'];
     
         $result = mysqli_query($conexao, "INSERT INTO cadastrocliente(nome,email,telefone,sexo,data_nasc,endereco,cidade,estado) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$endereco','$cidade','$estado')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " href="Icon/favicon.ico" type="image/x-icon">
    <title>Parceito</title>
    <link rel="stylesheet" href="estilos/Meus Estilos.css">
</head>
<body>
    
    <head>
        <script>
                function confereEmail(){
                const email = document.querySelector('input[name=email]');
                const confirma = document.querySelector('input[name=confemail]');

                if(confirma.value === email.value){
                    confirma.setCustomValidity('');
                }else{
                    confirma.setCustomValidity('Os e-mails não conferem');
                }
            }
            function confereSenha(){
                const senha = document.querySelector('input[name=password]');
                const confirma = document.querySelector('input[name=confpassword]');

                if(confirma.value === senha.value){
                    confirma.setCustomValidity('');
                }else{
                    confirma.setCustomValidity('As senhas não conferem');
                }
            }

            function senhaOk(){
                alert("Senhas conferem!")
            }
        </script>
        

        

        <section>
            <div class="box">
                <form action="cadastrocliente.php" method="POST">
                    <fieldset>
                        <legend><b>Formulário de Inscrição</b></legend>
                        <div class="inputBox">
                            <input type="text" name = "nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome completo</label>
                        </div><br><br>
                        
                        <div class="inputBox">
                            <input type="email" name = "email" id="email" class="inputUser" required onchange="confereEmail()">
                            <label for="email"class="labelInput">E-mail</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="email" name = "confemail" id="confemail" class="inputUser" required onchange="confereEmail()">
                            <label for="email"class="labelInput">Confirmar E-mail</label>
                        </div><br><br>
                       
                        <div class="inputBox">
                            <input type="tel" name = "telefone" id="telefone" class="inputUser" required>
                            <label for="telefone"class="labelInput">Telefone</label>
                        </div><br>
                       
                        <p class="topico">Sexo</p>
                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                        <label for="feminino">Feminino</label>
                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label><br><br>
                                                
                        <label for="data_nascimento" class="topico"><b>Data de Nascimento:</b></label>
                        <input type="date" name = "data_nascimento" id="data_nascimento" required>
                        <br><br><br>

                        <div class="inputBox">
                            <input type="text" name = "endereco" id="endereco" class="inputUser" required>
                            <label for="telefone"class="labelInput">Endereço</label>
                        </div><br><br>
                       
                        <div class="inputBox">
                            <input type="text" name = "cidade" id="cidade" class="inputUser" required>
                            <label for="telefone"class="labelInput">Cidade</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="text" name = "estado" id="estado" class="inputUser" required>
                            <label for="telefone"class="labelInput">Estado</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="password" name="password" id="password" class="inputUser" required onchange="confereSenha()">
                            <label for="password"class="labelInput">Senha</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="password" name="confpassword" id="confpassword" class="inputUser" required onchange="confereSenha()">
                            <label for="password"class="labelInput">Confirmar Senha</label>
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
                        <input type="submit" name="submit" id="submit" value="Enviar">
                    </fieldset>
                </form>
            </div>
        </section>
        <!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-236335067-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
E
  gtag('config', 'UA-236335067-1');
</script>
    </head>
    
    <a href="index.html"><br>Pressione aqui para voltar ao inicio</a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
      <main>
              <strong>
                  Para tirar suas dúvidas, fale conosco pelo WhatsApp do<a href="https://web.whatsapp.com/send?phone=5592993845613" target="_blank"> computador</a> ou pelo<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5592993845613" target="_blank"> celular</a>
                  <br>Telefone: (92) 99384-5613
                  <br>E-mail: extremeinfoservice@gmail.com
              </strong>
          
      </main>
      
   </footer>
    
</body>
</html>