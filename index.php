<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="shortcut icon" href="resources/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Veterinaria Seu Pet ❤</title>
</head>

<style>
    @font-face {
    font-family: 'Kopodaps';
    src: url('resources/fonts/kopodaps/Kopodaps.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
    }
</style>
<body onload="document.getElementById('user').focus()" class="body-login">
    <div class=cabecalho>
        <img src="resources/images/topo.png" id="img-dog" alt="">
    </div>
    <div class="body-items">
        <div class="container">
            <h2 class="txt-login">LOGIN🐾</h2>
                <form action="login.php" method="POST">                
                        <div class="campo">                    
                            <input type="text" name="user" id="user" placeholder="Usuário">                
                        </div>
                        <div class="campo">                    
                            <input type="password" name="pass" id="pass" placeholder="Senha">   
                        </div>
                        <input type="submit" id="btnAcessar" class="btnAcessar" onclick="login()" value="Acessar">
                </form>
            <div class="footer">                
                    <span>CLÍNICA VETERINÁRIA SEU PET 🐶😸</span>                
            </div>
        </div>
    </div>    
</body>
</html>
