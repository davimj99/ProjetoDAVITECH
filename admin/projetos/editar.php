<?php

include '../../config.php';

$id = $_GET['id'];

$projeto = $conn
    ->query("SELECT * FROM projetos WHERE id = $id")
    ->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $tecnologia = $_POST['tecnologia'];
    $github = $_POST['github'];
    $demo = $_POST['demo'];

    $sql = "UPDATE projetos SET
                titulo='$titulo',
                descricao='$descricao',
                tecnologia='$tecnologia',
                github='$github',
                demo='$demo'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: listar.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Projeto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            background-color: #f8f9fa;
        }

        .card-form {
            border: none;
            border-radius: 15px;
        }

    </style>

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow card-form">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">
                        Editar Projeto
                    </h3>

                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">

                            <label class="form-label">
                                Título
                            </label>

                            <input
                                type="text"
                                name="titulo"
                                value="<?= $projeto['titulo'] ?>"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Descrição
                            </label>

                            <textarea
                                name="descricao"
                                rows="5"
                                class="form-control"
                                required><?= $projeto['descricao'] ?></textarea>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Tecnologia
                            </label>

                            <input
                                type="text"
                                name="tecnologia"
                                value="<?= $projeto['tecnologia'] ?>"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Github
                            </label>

                            <input
                                type="url"
                                name="github"
                                value="<?= $projeto['github'] ?>"
                                class="form-control">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Demo
                            </label>

                            <input
                                type="url"
                                name="demo"
                                value="<?= $projeto['demo'] ?>"
                                class="form-control">

                        </div>

                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-warning">

                                Atualizar Projeto

                            </button>

                            <a
                                href="listar.php"
                                class="btn btn-secondary">

                                Voltar

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>