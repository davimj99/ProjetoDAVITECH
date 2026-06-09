<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<?php if (isset($_GET['sucesso'])): ?>
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Mensagem enviada com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
<?php endif; ?>

<section class="container py-5">

    <div class="text-center mb-5">
        <h1>Entre em Contato com da DaviTech</h1>
        <p class="text-muted">
            Solicite um orçamento ou tire suas dúvidas.
        </p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-body">

                    <form action="processar_contato.php" method="POST">

                        <!-- NOME -->
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <!-- EMPRESA -->
                        <div class="mb-3">
                            <label class="form-label">Empresa</label>
                            <input type="text" name="empresa" class="form-control">
                        </div>

                        <!-- MENSAGEM -->
                        <div class="mb-3">
                            <label class="form-label">Mensagem</label>
                            <textarea name="mensagem" rows="5" class="form-control" required></textarea>
                        </div>

                        <!-- BOTÃO -->
                        <button type="submit" class="btn btn-primary">
                            Enviar Mensagem
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>