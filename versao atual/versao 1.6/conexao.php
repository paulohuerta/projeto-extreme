<?php
    $servidor = 'Localhost';
    $usuario = 'root';
    $senha '';
    $dbname = 'extremeinfoservice';

    $conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);

    if(!$conexao){
        die ("Houve um erro: ".mysqli_connect_error());
    }else{
        echo "Conexão efetuada com sucesso";
    }

?>