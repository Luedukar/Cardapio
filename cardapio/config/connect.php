<?php
// Informações de conexão ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cardapio";

 
// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Exemplo de consulta
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);




?>


