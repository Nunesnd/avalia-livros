<?php 

$host = "localhost";
$dbname = "avalia_livros";
$user = "root";
$pass = "SENHA DO BANCO";

try {
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //MODO DE ERROS
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
}

?>