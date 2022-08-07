<?php
    $host = 'Localhost'; 
    $username = 'root';
    $senha = '';
    $bdname = 'projeto_heitor'; 

    $conn = mysqli_connect($host, $username, $senha, $bdname);

    if (!$conn) {
    die ('Erro de conexão.');
    }
    echo "Conectado." ;

?>

