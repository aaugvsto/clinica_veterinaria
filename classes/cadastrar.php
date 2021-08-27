<?php 

include "../config/conexao.php";

$msg = false;
$foto = '../resources/images/img_users';
$nome  = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$funcao = $_POST['funcao'];
$senha = $_POST['pass'];

if(isset($nome) && isset($cpf) && isset($endereco) && isset($funcao) && isset($senha)){
    $sql = "INSERT INTO users(id, nome, cpf, endereco, arq_foto, senha, cargos_id) VALUES (NULL, '$nome', '$cpf', '$endereco', '$foto',md5('$senha'), '$funcao')";
    if($mysqli->query($sql)){
        $msg = "Enviado com sucesso!";
        header('location: ../valida-cadastro.php');
    }else{
        $msg = "Falha ao enviar!";
        header('location: ../cadastro.php');
    }
}else{
    header('location: ../cadastro.php');
}


?>

