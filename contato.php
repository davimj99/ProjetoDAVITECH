<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="container py-5">
    <div class="text-center mb-5">
        <h1>Entre em Contato</h1>
        <p class="text-muted">
            Solicite um orçamento ou tire suas dúvidas.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="processar_contato.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Empresa</label>
                            <input type="text" name="empresa" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensagem</label>
                            <textarea name="mensagem" rows="5" class="form-control" required></textarea>
                        </div>

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