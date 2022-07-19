<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root'
    $dbPassword = '';
    $dbName = 'extremeinfoservice';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

    if($conexao -> connect_erro){
        echo "Erro";
    }
    else{
        echo "Conexão atualizada com sucesso"
    }
?>