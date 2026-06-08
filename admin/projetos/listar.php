<?php

include '../../config.php';

$resultado = $conn->query(
    "SELECT * FROM projetos ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - DaviTech</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color: #f8f9fa;
        }

        .card-dashboard{
            border: none;
            border-radius: 15px;
        }

        .table thead{
            background-color: #212529;
            color: white;
        }

        .btn-action{
            min-width: 90px;
        }

    </style>

</head>

<body>

<div class="container py-5">

    <div class="card shadow card-dashboard">

        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

            <h3 class="mb-0">Gerenciar Projetos</h3>

            <a href="cadastrar.php" class="btn btn-success">
                + Novo Projeto
            </a>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Tecnologia</th>
                            <th width="220">Ações</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php while($projeto = $resultado->fetch_assoc()): ?>

                        <tr>

                            <td>
                                <?= $projeto['id'] ?>
                            </td>

                            <td>
                                <?= $projeto['titulo'] ?>
                            </td>

                            <td>
                                <span class="badge bg-primary">
                                    <?= $projeto['tecnologia'] ?>
                                </span>
                            </td>

                            <td>

                                <a
                                    href="editar.php?id=<?= $projeto['id'] ?>"
                                    class="btn btn-warning btn-sm btn-action">

                                    Editar

                                </a>

                                <a
                                    href="excluir.php?id=<?= $projeto['id'] ?>"
                                    class="btn btn-danger btn-sm btn-action"
                                    onclick="return confirm('Deseja realmente excluir este projeto?')">

                                    Excluir

                                </a>

                            </td>

                        </tr>

                    <?php endwhile; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>