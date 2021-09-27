<?php
include "../config/conexao.php";

if(empty($_POST['admlogin']) && empty($_POST['admsenha'])){
    header('location: index.php');
    exit();
}else{

    $user = mysqli_real_escape_string($mysqli, $_POST["admlogin"]);
    $pass = mysqli_real_escape_string($mysqli, $_POST["admsenha"]);
    
    $query = "SELECT user,pass FROM adm WHERE user = '{$user}' AND pass = md5('{$pass}')";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        header('location: ../cadastro.php');
    }else{
        header('location: ../index.php');
        exit();
    }
}




?>