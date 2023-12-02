<?php
    $servidor = "127.0.0.1";
    $usuario = "aluno";
    $senha = "8162110";
    $banco = "bancolista02";
    try {
        $conn = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);
    
        // configura erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Erro ao consctar com o banco: ". $e->getMessage();
    }
?>