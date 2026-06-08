<?php
// Inicia a sessão
session_start();


define('BASE_PATH', dirname(__DIR__)); // Aponta para a raiz 'DaviTech/'

// 2. Verificação de autenticação
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}

// 3. Inclusão dos arquivos utilizando a constante BASE_PATH
require_once BASE_PATH . '/config.php';
include BASE_PATH . '/admin/includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 p-0 bg-dark min-vh-100">
            <?php include BASE_PATH . '/admin/includes/sidebar.php'; ?>
        </div>

        <div class="col-md-10 p-4">
            <h1>Dashboard</h1>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>Projetos</h5>
                            <?php
                            // Consulta segura ao banco
                            $sql = "SELECT COUNT(*) as total FROM projetos";
                            $result = $conn->query($sql);
                            $total = $result->fetch_assoc()['total'] ?? 0;
                            ?>
                            <h2><?= $total ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include BASE_PATH . '/admin/includes/footer.php'; ?>