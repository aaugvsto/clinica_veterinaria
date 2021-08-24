
<?php 

include "../config/conexao.php";

$msg = false;
$nome  = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$funcao = $_POST['funcao'];
$senha = $_POST['pass'];

    $sql = "INSERT INTO users(id, nome, cpf, endereco, senha, cargos_id) VALUES (NULL, '$nome', '$cpf', '$endereco',md5('$senha'), '$funcao')";
    if($mysqli->query($sql)){
        $msg = "Arquivo enviado com sucesso!";
        header('location: ../index.php');
    }else{
        $msg = "Falha ao enviar!";
    }
    

?>

