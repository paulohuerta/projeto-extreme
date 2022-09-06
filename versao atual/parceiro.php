<?php


    if(isset($_POST['submit'])){
               

        include_once('config.php');
         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['genero'];
         $data_nasc = $_POST['data_nascimento'];
         $endereco = $_POST['endereco'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $ponto_fixo = $_POST['residencia'];
         $acesso_remoto = $_POST['remoto'];
         $domicilio = $_POST['domicilio'];
         $formatacao = $_POST['formatacao'];
         $serv_plmae_pc = $_POST['serv_plmae_pc'];
         $serv_plmae_not = $_POST['serv_plmae_not'];
         $venda_ac = $_POST['venda_ac'];
         $inst_cam = $_POST['int_cam'];
         $inst_alarm = $_POST['int_alarm'];
         $manut_monitor = $_POST['manut_munit'];
         $manut_impressora = $_POST['manut_impressora'];
         $manut_eletro = $_POST['manut_eletro'];
         $outros = $_POST['outros'];


         $result = mysqli_query($conexao, "INSERT INTO cadastrotecnico(nome,email,telefone,sexo,data_nasc,endereco,cidade,estado,ponto_fixo,acesso_remoto,domicilio,formatacao,serv_plmae_pc,serv_plmae_not,venda_ac,inst_cam,inst_alarm,manut_monitor,manut_impressora,manut_eletro,outros) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$endereco','$cidade','$estado','$ponto_fixo','$acesso_remoto','$domicilio','$formatacao','$serv_plmae_pc','$serv_plmae_not','$venda_ac','$inst_cam','$inst_alarm','$manut_monitor','$manut_impressora','$manut_eletro','$outros')");
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
    <h1>Obrigado pela sua parceria, vamos fazer fortes alianças para conquistarmos mais clientes</h1>
    <head>
        <nav>
            <a href="links.html">Links para downloads</a>
            <a href="treinamento.html">Vídeos para treinamentos</a>
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
                            <input type="email" name = "email" id="email" class="inputUser" required>
                            <label for="email"class="labelInput">E-mail</label>
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
                        </div><br>

                        <div>
                            <p class="topico">Ponto de Atuação</p>
                            <section>
                                <input type="checkbox" name="residencia" id="residencia">
                                <label for="residencia"class="servico">Ponto Fixo</label>
                            </section>
                            <section>
                                <input type="checkbox" name="remoto" id="remoto">
                                <label for="remoto"class="servico">Acesso Remoto</label>
                            </section>
                            <section>
                                <input type="checkbox" name="domicilio" id="domicilio">
                                <label for="domicilio"class="servico">Domicílio</label>
                            </section>
                        </div>
                        
                        <div>
                            
                                <p class="topico">Serviços</p>
                                
                                <section>
                                    <input type="checkbox" name="formatacao" id="formatacao">
                                    <label for="formatacao"class="servico">Formatação de Computador/Notebook</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="serv_plmae_pc" id="serv_plmae_pc">
                                    <label for="serv_plmae_pc"class="servico">Conserto de Placa Mãe de PC</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="serv_plmae_not" id="serv_plmae_not">
                                    <label for="serv_plmae_not"class="servico">Conserto de Placa Mãe de Notebook</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="venda_ac" id="venda_ac">
                                    <label for="venda_ac"class="servico">Venda de Acessórios</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="int_cam" id="int_cam">
                                    <label for="int_cam"class="servico">Instalação de Câmeras</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="int_alarm" id="int_alarm">
                                    <label for="int_alarm"class="servico">Instalação de Alarmes</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="manut_munit" id="manut_munit">
                                    <label for="manut_munit"class="servico">Manutenção de Monitor</label>
                                </section>
                                
                                <section>
                                    <input type="checkbox" name="manut_impressora" id="manut_impressora">
                                    <label for="manut_impressora" class="servico">Manutenção de Impressora</label>
                                </section>
                                <section>
                                    <input type="checkbox" name="manut_eletro" id="manut_eletro">
                                    <label for="manut_eletro" class="servico">Equipamentos Eletrônicos</label>
                                </section>
                                <br><br>
                                <div class="inputBox">
                                    <input type="text" name = "outros" id="outros" class="inputUser">
                                    <label for="outro"class="labelInput">Outros Serviços</label>
                                </div>
                            
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
    
    <a href="index.html"><br>Pressione aqui para voltar para o inicio</a>
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