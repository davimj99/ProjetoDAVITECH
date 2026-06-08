<?php

include '../../config.php';

$id = $_GET['id'];

$conn->query(
    "DELETE FROM projetos WHERE id = $id"
);

header("Location: listar.php");
exit();