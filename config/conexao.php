<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'veterinaria_seucao');

$mysqli = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar ao BD.');

?>