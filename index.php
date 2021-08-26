<?php
header('Content-Type: text/html; charset=utf-8');
include('config/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="resources/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
    <div class=cabecalho-app>
        <div class="img-cad"><img src="resources/favicon/veterinario1.png" alt=""></div>
    </div>
    <div class="body-items">
        <div class="container">
            <h2 class="txt-login">LOGIN</h2>
            <form action="classes/login.php" method="POST">
                <div class="campo">
                    <div class="row-inp colorinp-login">
                        <i class="inp-icon fas fa-user"></i>
                        <input type="text" name="user" id="user" placeholder="Usuário">
                    </div>
                </div>
                <div class="campo">
                    <div class="row-inp colorinp-login">
                        <i class="inp-icon fas fa-lock"></i>
                        <input type="password" name="pass" id="pass" placeholder="Senha">
                    </div>
                </div>
                <div style="margin-top: 10px;" class="campo">
                    <div class="row-inp colorinp-login">
                        <input type="submit" name="btnAcessar" id="btnAcessar" value="Acessar">
                        <i class="inp-icon fas fa-sign-in-alt"></i>
                    </div>
                </div>
                
                <div style="margin-top: 10px;" class="campo">
                    <div class="row-inp colorinp-login">
                        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastar">
                        <i class="inp-icon fas fa-address-book"></i>
                    </div>
                </div>
            </form>
            
            <div class="footer">
                <span>CLÍNICA VETERINÁRIA SEU PET 🐶😸</span>
            </div>
        </div>

        <div class="popup">
            <div class="popup-content">
                <span id="close-btn" class="fas fa-times close-pop" onclick="fecharpop()"></span>
                <img src="resources/images/img_users/adm-cad.png" class="imgpop" alt="">
                <form action="classes/loginadm.php" method="POST" id="frm-pop">
                    <div class="campo">
                        <div class="row-inp colorinp-adm">
                            <i class="inp-icon fas fa-user"></i>
                            <input type="text" name="admlogin" id="admlogin" placeholder="Usuário">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="row-inp colorinp-adm">
                            <i class="inp-icon fas fa-lock"></i>
                            <input type="password" name="admsenha" id="admsenha" placeholder="Senha">
                        </div>
                    </div>
                    <input type="submit" value="ACESSAR" class="formpop">
            </div>
            </form>
        </div>
    </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>