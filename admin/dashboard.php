<?php
session_start();

define('BASE_PATH', dirname(__DIR__));

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}

require_once BASE_PATH . '/config.php';
include BASE_PATH . '/admin/includes/header.php';
?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 p-0 bg-dark min-vh-100">
            <?php include BASE_PATH . '/admin/includes/sidebar.php'; ?>
        </div>

        <!-- CONTEÚDO -->
        <div class="col-md-10 p-4">

            <h1 class="mb-4">Dashboard</h1>
            <hr>

            <?php
            // PROJETOS
            $result = $conn->query("SELECT COUNT(*) as total FROM projetos");
            $projetos = $result ? $result->fetch_assoc()['total'] : 0;

            // CLIENTES
            $result = $conn->query("SELECT COUNT(*) as total FROM clientes");
            $clientes = $result ? $result->fetch_assoc()['total'] : 0;

            // MENSAGENS
            $result = $conn->query("SELECT COUNT(*) as total FROM mensagens");
            $mensagens = $result ? $result->fetch_assoc()['total'] : 0;

            // USUÁRIOS
            $result = $conn->query("SELECT COUNT(*) as total FROM usuarios");
            $usuarios = $result ? $result->fetch_assoc()['total'] : 0;

            // MENSAGENS NOVAS (SEGURANÇA TOTAL)
            $result = $conn->query("SELECT COUNT(*) as total FROM mensagens WHERE status='novo'");
            $mensagens_novas = $result ? $result->fetch_assoc()['total'] : 0;
            ?>

            <!-- CARDS -->
            <div class="row g-3">

                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>Projetos</h5>
                            <h2><?= $projetos ?></h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>Clientes</h5>
                            <h2><?= $clientes ?></h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>Mensagens</h5>
                            <h2><?= $mensagens ?></h2>
                            <small><?= $mensagens_novas ?> novas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>Usuários</h5>
                            <h2><?= $usuarios ?></h2>
                        </div>
                    </div>
                </div>

            </div>

            <!-- MENSAGENS RECENTES -->
            <div class="mt-5">

                <h4>Mensagens recentes</h4>

                <?php
                $recentes = $conn->query("
                    SELECT * FROM mensagens 
                    ORDER BY created_at DESC 
                    LIMIT 5
                ");
                ?>

                <div class="list-group mt-3">

                    <?php if ($recentes && $recentes->num_rows > 0): ?>

                        <?php while($m = $recentes->fetch_assoc()): ?>

                            <div class="list-group-item d-flex justify-content-between align-items-center">

                                <div>
                                    <strong><?= htmlspecialchars($m['nome']) ?></strong><br>
                                    <small><?= htmlspecialchars($m['email']) ?></small>
                                </div>

                                <span class="badge bg-<?= ($m['status'] ?? 'novo') == 'novo' ? 'danger' : 'success' ?>">
                                    <?= $m['status'] ?? 'novo' ?>
                                </span>

                            </div>

                        <?php endwhile; ?>

                    <?php else: ?>

                        <div class="alert alert-info">
                            Nenhuma mensagem encontrada
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
</div>

<?php include BASE_PATH . '/admin/includes/footer.php'; ?>