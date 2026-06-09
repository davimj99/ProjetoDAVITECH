<?php
include '../../config.php';

$sql = "SELECT * FROM mensagens ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Mensagens</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="/DaviTech/assets/css/listar_mensagem.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

<div class="container py-5">

    <h2 class="mb-4">Mensagens recebidas</h2>

    <a href="../dashboard.php" class="btn btn-secondary mb-3">Voltar</a>

    <div class="row">

    <?php while($row = $result->fetch_assoc()): ?>

        <div class="col-md-6 mb-3">

            <div class="card shadow-sm border-<?=
                $row['status'] == 'novo' ? 'danger' : 'success'
            ?>">

                <div class="card-body">

                    <h5>
                        <?= htmlspecialchars($row['nome']) ?>
                    </h5>

                    <p class="mb-1 text-muted">
                        <?= htmlspecialchars($row['email']) ?>
                    </p>

                    <span class="badge bg-<?=
                        $row['status'] == 'novo' ? 'danger' : 'success'
                    ?>">
                        <?= $row['status'] ?>
                    </span>

                    <div class="mt-3">

                        <!-- BOTÃO MODAL -->
                        <button class="btn btn-primary btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#msgModal<?= $row['id'] ?>">
                            Ver
                        </button>

                        <!-- MARCAR COMO LIDO -->
                        <?php if ($row['status'] == 'novo'): ?>
                            <a href="marcar_lido.php?id=<?= $row['id'] ?>"
                               class="btn btn-success btn-sm">
                                Marcar como lido
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- MODAL -->
        <div class="modal fade" id="msgModal<?= $row['id'] ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            Mensagem de <?= htmlspecialchars($row['nome']) ?>
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
                        <hr>
                        <p><?= nl2br(htmlspecialchars($row['mensagem'])) ?></p>
                    </div>

                    <div class="modal-footer">
                        <small class="text-muted">
                            <?= $row['created_at'] ?>
                        </small>
                    </div>

                </div>
            </div>
        </div>

    <?php endwhile; ?>

    </div>

</div>

<script src="../../assets/js/listar_mensagem.js"></script>
</body>
</html>