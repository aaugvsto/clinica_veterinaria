<?php
include('config/conexao.php');

if(empty($_POST['user']) || empty($_POST['pass'])){
    header('location: index.php');
    exit();
}

$user = mysqli_real_escape_string($mysqli, $_POST['user']);
$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);

$query = "select id, nome from users where cpf = '{$user}' and senha = md5('{$pass}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user'] = $user;
    header('location: app.php');
}else{
    header('location: index.php');
    exit();
}




