<?php
$servername = "localhost";
$username = "root";  // substitua pelo seu usuário do MySQL
$password = "";      // substitua pela sua senha do MySQL
$dbname = "crud_db";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
