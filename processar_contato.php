<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $stmt = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem);
    $stmt->execute();

    header("Location: contato.php?sucesso=1");
    exit;
}
?>