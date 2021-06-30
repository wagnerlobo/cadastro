<?php 

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-w';


$conexao = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {

    echo "erro";
}

else {

    echo "Conexão efetuada com sucesso";
}

?>