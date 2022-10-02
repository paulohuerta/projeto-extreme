<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilos/Meus Estilos.css">
    <title>Login</title>
    <style>
        div{
            background-color: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 80px;
            position: absolute;
            top: 50%;
            left: 50%;    
            transform: translate(-50%,-50%); 
            border-radius: 15px;       
        }
        input{
            font-size: 15px;
            border: none;
            outline: none;
            padding: 15px;
        }
        button{
            background-color: red;
            width: 100%;
            padding: 15px;
            color: white;
            border-radius: 10px;
            border: none;
        }
        button:hover{
            background-color: darkred;
            cursor: pointer;
        }
        
        a{
            text-decoration: none;
            color: red;
            border: 3px solid red;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: red;
            color: white;
        }
        .inputSubmit{
            text-decoration: none;
            color: red;
            border: 3px solid red;
            border-radius: 10px;
            padding: 10px;
        }
        .inputSubmit:hover{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <p>Login</p>
        <form action="loginteste.php" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Login">
            <a class="caixa"href="cadastrocliente.php">Cadastre-se</a><br><br><br>
            <a class="caixa" href="recuperarsenha.php">Recuperar Senha</a>
            <br><br>
        </form>

    </div>
    
</body>
</html>