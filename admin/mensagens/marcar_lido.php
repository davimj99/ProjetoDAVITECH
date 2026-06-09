<?php
include '../../config.php';

$id = $_GET['id'];

$stmt = $conn->prepare("UPDATE mensagens SET status = 'lido' WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: listar.php");
exit;
?>