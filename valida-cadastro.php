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
        .row {
            display: flex;
            flex-direction: column;
        }
    }
</style>

<body onload="document.getElementById('user').focus()" class="body-login">
    <div class=cabecalho-app>
        <div class="img-cad"><a href="index.php"><img src="resources/favicon/veterinario1.png" alt=""></a></div>
    </div>
    <div class="body-items">
        <div class="container">
            <h2 class="txt-login">Cadastro efetuado com sucesso</h2>
            <div class="row">
                <div class="padcad">
                    <a href="index.php" class="campo-cad">
                        <input class="inp-hover" type="submit" value="Cadastrar Mais">
                        <i class="inp-icon fas fa-user-plus"></i>
                    </a>
                </div>

                <div class="padcad">
                    <a href="index.php" class="campo-cad">
                        <input type="submit" class="inp-hover" value="Voltar Início">
                        <i class="inp-icon fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
<div class="footer">
                <span>CLÍNICA VETERINÁRIA SEU PET <br>🐶😸</span>
        </div>
    </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>