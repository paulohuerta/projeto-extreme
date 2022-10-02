<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/Meus Estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Meu Painel</title>
    <link rel="shortcut icon" href="Icon/favicon.ico" type="image/x-icon">
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Extreme Info Service</a>
            <BUTTon class="navbar-toggler" type="button" data-bs-taggle="collapse" data-bs-taggle="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>    
            </BUTTon>
            </div>
        <div class="d-flex">
            <a href="loginsair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <?php
            echo "<h1>Bem vindo <u>$logado</u></h1>";
        ?>
    <h1>Meu Painel</h1>
    <h2>Acessou o sistema</h2>
</body>
</html>