<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'extremebanco';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    $conexao->set_charset("utf8");
    
    if($conexao -> connect_error){
        echo "ERRO DE CONEXÃO";
    }else{
       echo "CONEXÃO BEM SUCEDIDA!";
    }

     if($conexao->connect_errno){
         echo "Erro";
     }
     else{
         echo "Conexão atualizada com sucesso";
     }
?>