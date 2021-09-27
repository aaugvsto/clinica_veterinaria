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

    @media(max-width: 700px) {
        .row-btns {
            display: flex;
            flex-direction: column;
        }

        .padcad {
            padding-bottom: 5px;
            padding-right: 0px;
            width: 100%;
        }
    }
</style>

<body onload="document.getElementById('user').focus()" class="body-login">
    <div class=cabecalho-app>
        <div class="img-cad"><img src="resources/favicon/veterinario1.png" alt=""></div>
    </div>
    <div class="body-items">
        <div class="container">
            <div class="img-cad">
            <img style="user-select: none;" src="resources/icons/img-login.png" alt="">
            </div>
            <h2 class="txt-login">LOGIN</h2>
            <form action="app.php" method="POST">
                <div class="campo">
                    <div class="row-inp colorinp-login">
                        <i class="inp-icon fas fa-user"></i>
                        <input type="number"class="input-cadastro" required="required" name="user" id="user" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" placeholder="Usuário">
                    </div>
                </div>
                <div class="campo">
                    <div class="row-inp colorinp-login">
                        <i class="inp-icon fas fa-lock"></i>
                        <input type="password" required="required" name="pass" id="pass" placeholder="Senha">
                    </div>
                </div>
                <div class="row-btns">
                    <div class="padcad">
                        <div class="campo-cad">
                            <input type="submit" value="Acessar">
                            <i class="inp-icon fas fa-sign-in-alt"></i>
                        </div>
                    </div>

                    <div class="padcad padcad-r">
                        <div class="campo-cad">
                            <input type="button" value="Cadastrar" onclick="abrirpop()">
                            <i class="inp-icon fas fa-user-plus"></i>
                        </div>
                    </div>

                </div>
            </form>
            <div class="footer">
                <span>CLÍNICA VETERINÁRIA SEU PET <br>🐶😸</span>
            </div>
        </div>
    </div>

    <div class="popup">
        <div class="popup-content">
            <span id="close-btn" class="fas fa-times close-pop" onclick="fecharpop()"></span>
            <img src="resources/images/img_users/adm-cad.png" class="imgpop" alt="">
            <form action="classes/loginadm.php" method="POST" id="frm-pop">
                <div class="campo">
                    <div class="row-inp">
                        <i class="inp-icon-pop fas fa-user"></i>
                        <input type="text" name="admlogin" id="admlogin" placeholder="Usuário">
                    </div>
                </div>
                <div class="campo">
                    <div class="row-inp">
                        <i class="inp-icon-pop fas fa-lock"></i>
                        <input type="password" name="admsenha" id="admsenha" placeholder="Senha">
                    </div>
                </div>
                <div style="margin-top: 8px; margin-left: -11px" class="campo">
                    <div class="row-inp colorinp-adm btn-cadind btn-cadpad">
                        <input type="submit" style="border: 0; border-right: 3px solid black" name="btnCadastrar" id="btnCadastrar" value="Cadastrar">
                        <i class="inp-icon-pop fas fa-address-book"></i>
                    </div>
                </div>

        </div>
        </form>
    </div>
    </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>