<?php
session_start(); //iniciando a sessão
ob_start(); //limpando do bufer de saida
include_once 'config2.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Icon/favicon.ico" type="image/x-icon">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="estilos/Meus Estilos.css">
    <style>

    </style>
</head>
<body>
    <h1>Recuperar Senha</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(!empty($dados['SendRecuperarSenha'])){
        var_dump($dados);
        $query_usuario = "SELECT id, nome, eamil 
        from cadastrocliente
        where email = :email
        limit 1";
        $result_usuario = $$conexao->prepare($query_usuario);
        $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
        $result_usuario->execute();
    }
    ?>
    <section>
        <div class="box">
            <form action="recupersenha.php" action="POST">
                <fieldset>
                    <legend>Recuperar Senha</legend>
                    <div class="inputBox">
                        <input type="text" name="usuario" placeholder="Digite o e-mail"
                        value="<?php if(isset($dados['usuario'])) { echo $dados['usuario'];}?>">  
                        <input type="submit" value="Recuperar" name="sendRecuperarSenha">
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>