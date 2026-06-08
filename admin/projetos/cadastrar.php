<?php
include '../../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura dos dados
    $titulo     = $_POST['titulo'];
    $descricao  = $_POST['descricao'];
    $tecnologia = $_POST['tecnologia'];
    $github     = $_POST['github'];
    $demo       = $_POST['demo'];

    // Prepared Statement para evitar SQL Injection
    $sql = "INSERT INTO projetos (titulo, descricao, tecnologia, github, demo) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // "sssss" indica que todos os 5 campos são strings
    $stmt->bind_param("sssss", $titulo, $descricao, $tecnologia, $github, $demo);

    if ($stmt->execute()) {
        header("Location: listar.php");
        exit();
    } else {
        $erro = "Erro ao cadastrar projeto: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Projeto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card-form { border: none; border-radius: 15px; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow card-form">
                    <div class="card-header bg-dark text-white">
                        <h3 class="mb-0">Cadastrar Projeto</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($erro)): ?>
                            <div class="alert alert-danger"><?= $erro ?></div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Título do Projeto</label>
                                <input type="text" name="titulo" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descrição</label>
                                <textarea name="descricao" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tecnologia</label>
                                <input type="text" name="tecnologia" class="form-control" placeholder="Ex: PHP, Django, FastAPI" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Github</label>
                                <input type="url" name="github" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Demo</label>
                                <input type="url" name="demo" class="form-control">
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-success">Salvar Projeto</button>
                                <a href="listar.php" class="btn btn-secondary">Voltar</a>
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