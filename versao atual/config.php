<?php

    $dbHost = 'localhost';
    $dbUsername = 'id19299912_paulo';
    $dbPassword = 'P@ulo1234567';
    $dbName = 'id19299912_bancoextreme';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    $conexao->set_charset("utf8");
    
    if($conexao -> connect_error){
        echo "ERRO DE CONEXÃO";
    }//else{
    //    echo "CONEXÃO BEM SUCEDIDA!";
   // }

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }
    // else{
    //     echo "Conexão atualizada com sucesso";
    // }
?>