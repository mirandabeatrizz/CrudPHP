<?php //login 
require 'conexao.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
    <div class="imagem">
        <img src="assets\imgs\imglogin.png">
    </div>
    <div class="form">
       
        <div class="card">
            <h1>Seja Bem-Vindo</h1>
            <h3>Faça seu login</h3>
        <form action="acesso.php" method="post">
            
            <div class="textfield">
                <label for="email" class="">Email</label>
                <input type="email" class="" id="email" placeholder="Email">
            </div>
            
            <div class="textfield">
                <label for="senha" class="">Senha:</label>
                <input type="password" id="senha" placeholder="Digite sua senha" name="senha">
                
            </div>
            <button type="submit" class="btn-login"><b>Acessar</b></button>
        
        </form>
    </div>

    </div>
</div>
    
</body>
</html>