<?php
    require 'conection.php';

    $username = $_POST['USUARIO_nome'];
    $password = $_POST['USUARIO_senha'];

  

    // $conn->query("INSERT INTO users(username, password) VALUES ('$username', '$password')");
    $stmt = $conn->prepare('INSERT INTO usuario(USUARIO_nome, USUARIO_senha) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    http_response_code(201);
?>