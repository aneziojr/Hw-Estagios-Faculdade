<?php


$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

IF (!$conexao) {
    print "Falho na conexão com o Banco de Dados"; 


}
?>