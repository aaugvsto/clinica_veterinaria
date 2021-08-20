<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'veterinaria_seucao');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar ao BD.');

?>