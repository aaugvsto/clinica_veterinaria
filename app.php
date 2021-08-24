<?php
include("config/conexao.php");
include("classes/exibirAnimais.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="resources/favicon/veterinario.png" type="image/x-icon">
    <title>Cliníca Veterinária Seu Pet</title>
</head>
<style>
    @font-face {
        font-family: 'Kopodaps';
        src: url('resources/fonts/kopodaps/Kopodaps.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }


</style>

<body class="body-app">
    <div class="cabecalho-app">
        <input type="checkbox" name="close" id="close">
        <label for="close">
            <span id="open-btn" class="fas fa-bars"></span>
        </label>
        <div class="img-system"><img src="resources/favicon/veterinario1.png" alt=""></img></div>
        
        <nav>
            <div class="user-data">
                <img src="resources/images/img_users/user.png" class="brand" alt="foto"></img>
                <div id="nome">
                    <p class="brand" id="nome">NAME_USER</p>
                </div>
            </div>

            <label for="close">
                <span id="close-btn" class="fas fa-times"></span>
            </label>

            <ul>
                <li class="list-item"><i class="nav-link fas fa-home fa-fw"></i><a href="#" class="text-menu">Meus Pets</a></li>
                <li class="list-item"><i class="nav-link fas fa-user fa-fw"></i><a href="#" class="text-menu">Meu perfil</a></li>
                <li class="list-item"><i class="nav-link fas fa-sign-out-alt fa-fw"></i><a href="#" class="text-menu">Sair</a></li>
            </ul>
        </nav>
    </div>

    <table class="center">
        <tr>
            <td>Nome</td>
            <td>Raça</td>
            <td>Sexo</td>
            <td>Dono</td>
            <td>Procedimento</td>
        </tr>
        <?php while($dado = $con->fetch_array()){?>
        <tr>
            <td><?php echo $dado["nome"]?></td>
            <td><?php echo $dado["raca"]?></td>
            <td><?php echo $dado["sexo"]?></td>
            <td><?php echo $dado["nome_dono"]?></td>
            <td><?php echo $dado["tipo_procedimento"]?></td>
        </tr>
        <?php } ?>
    </table>    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
</body>

</html>