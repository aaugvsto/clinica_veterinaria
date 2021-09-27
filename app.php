<?php
include "config/conexao.php";

if (empty($_POST['user']) || empty($_POST['pass'])) {
    header('location: index.php');
    exit();
}

$user = mysqli_real_escape_string($mysqli, $_POST['user']);
$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);

$query = "select id, nome, arq_foto from users where cpf = '{$user}' and senha = md5('{$pass}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);
$arraysql = mysqli_fetch_array($result);
$foto = $arraysql['arq_foto'];
$nome = $arraysql['nome'];

if ($row == 1) {
    session_start();
    $_SESSION['user'] = $user;
} else {
    header('location: index.php');
    exit();
}

echo $user;

if (isset($_POST["sair"])) {
    session_destroy();
    header('location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
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
                <img src="<?php echo $foto ?>" class="brand" style="border-radius: 50%; border: 1px black" alt="foto"></img>
                <div id="nome">
                    <p class="brand" id="nome"><?php echo $nome ?></p>
                </div>
            </div>

            <label for="close">
                <span id="close-btn" class="fas fa-times"></span>
            </label>

            <ul>
                <li class="list-item"><i class="nav-link fas fa-home fa-fw"></i><a href="#" class="text-menu">Meus Pets</a></li>
                <li class="list-item"><i class="nav-link fas fa-user fa-fw"></i><a href="#" class="text-menu">Meu perfil</a></li>
                <form action="" style="padding: 40px;">
                    <input type="submit" style="border-right: 0px;" name="sair" id="sair" value="sair">
                </form>
            </ul>
        </nav>
    </div>
<div class="body-ap">
    <div class="container-app">
        <div class="row">
        <?php include("classes/tblAnimais.php") ?>
        <?php include("classes/tblAnimais.php") ?>
        </div>
    </div>
    <div class="container-app">
        <div class="row">
        <?php include("classes/tblAnimais.php") ?>
        <?php include("classes/tblAnimais.php") ?>
        </div>
    </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>

</body>

</html>