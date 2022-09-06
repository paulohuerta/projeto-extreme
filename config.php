<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'extremebanco';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    $conexao->set_charset("utf8");
    
    /*if($conexao -> connect_error){
        echo "ERRO DE CONEXÃO";
    }else{
       echo "CONEXÃO BEM SUCEDIDA!";
    }

     if($conexao->connect_errno){
         echo "Erro";
     }
     else{
         echo "Conexão atualizada com sucesso";
     }*/
     
     
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado</title>
</head>
<body>
    <script>
        window.alert('Obrigado por se cadastrar,vamos entrar em contato')
    </script>
</body>
</html>