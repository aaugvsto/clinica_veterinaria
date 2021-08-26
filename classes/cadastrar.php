<?php 

include "../config/conexao.php";

$msg = false;
$foto = '../resources/images/img_users';
$nome  = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$funcao = $_POST['funcao'];
$senha = $_POST['pass'];

    $sql = "INSERT INTO users(id, nome, cpf, endereco, arq_foto, senha, cargos_id) VALUES (NULL, '$nome', '$cpf', '$endereco', '$foto',md5('$senha'), '$funcao')";
    if($mysqli->query($sql)){
        $msg = "Arquivo enviado com sucesso!";
        echo $msg;
        header('location: ../cadastro.php');
    }else{
        $msg = "Falha ao enviar!";
        echo $msg.mysqli_error($mysqli);
        header('location: ../cadastro.php');
    }
    

?>

