<?php


    if(isset($_POST['submit'])){
               
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);
        //print_r($_POST['data_ag']);
        //print_r($_POST['hora_ag']);
        //print_r($_POST['cidade']);
        //print_r($_POST['estado']);
        include_once('../config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_ag = $_POST['data_ag'];
        $hora_ag = $_POST['hora_ag'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
         
        $result = mysqli_query($conexao, "INSERT INTO cadastroclientefree(nome,email,telefone,data_ag,hora_ag,cidade,estado) VALUES ('$nome','$email','$telefone','$data_ag','$hora_ag','$cidade','$estado')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " href="../Icon/favicon.ico" type="image/x-icon">
    <title>Cliente</title>
    <link rel="stylesheet" href="../estilos/Meus Estilos.css">
</head>
<body>
    
    <head>
        <section>
            <div class="box">
                <form action="cadastro_cliente.php" method="POST">
                    <fieldset>
                        <legend><b>Formulário de Inscrição</b></legend>
                       
                        <div class="inputBox">
                            <input type="text" name = "nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome Sobrenome</label>
                        </div><br><br>
                        
                        <div class="inputBox">
                            <input type="email" name = "email" id="email" class="inputUser" required>
                            <label for="email"class="labelInput">E-mail</label>
                        </div><br><br>
                       
                        <div class="inputBox">
                            <input type="tel" name = "telefone" id="telefone" class="inputUser" required>
                            <label for="telefone"class="labelInput">Telefone</label>
                        </div><br>
                       
                       
                                                
                        <label for="data_ag" class="topico"><b>Data de Agendamento:</b></label>
                        <input type="date" name = "data_ag" id="data_ag" required>
                        <br><br><br>

                        <label for="hora_ag" class="topico"><b>Hora de Agendamento:</b></label>
                        <input type="time" name = "hora_ag" id="hora_ag" required>
                        <br><br><br>

                       
                        <div class="inputBox">
                            <input type="text" name = "cidade" id="cidade" class="inputUser" required>
                            <label for="telefone"class="labelInput">Cidade</label>
                        </div><br><br>

                        <div class="inputBox">
                            <input type="text" name = "estado" id="estado" class="inputUser" required>
                            <label for="telefone"class="labelInput">Estado</label>
                        </div><br>

                    

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

        <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '674931844660705');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=674931844660705&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
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
    
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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