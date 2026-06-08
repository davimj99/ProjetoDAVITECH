<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "davitech";

$conn = new mysqli(
    $host,
    $user,
    $password,
    $database
);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}