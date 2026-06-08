<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Projetos Desenvolvidos</h1>
        <p class="text-muted">
            Alguns projetos criados pela DaviTech.
        </p>
    </div>

    <div class="row g-4">

        <!-- PROJETO 1 -->
        <div class="col-md-4">
            <div class="card shadow border-0 h-100 project-card">
                <div class="card-body">

                    <h4 class="fw-bold">
                        <i class="bi bi-speedometer2 text-primary me-2"></i>
                        Dashboard MikroTik
                    </h4>
                    <p class="text-muted">
                        Dashboard para monitoramento de redes utilizando FastAPI.
                    </p>
                    <span class="badge bg-primary">FastAPI</span>
                    <button class="btn btn-outline-primary btn-sm mt-3"
                            data-bs-toggle="modal"
                            data-bs-target="#modalMikrotik">
                        Ver detalhes
                    </button>
                </div>
            </div>
        </div>

        <!-- PROJETO 2 -->
        <div class="col-md-4">
            <div class="card shadow border-0 h-100 project-card">
                <div class="card-body">
                    <h4 class="fw-bold">
                        <i class="bi bi-cart-check text-success me-2"></i>
                        Mini Mercado
                    </h4>
                    <p class="text-muted">
                        Sistema completo de vendas e estoque.
                    </p>

                    <span class="badge bg-success">Django</span>
                    <button class="btn btn-outline-success btn-sm mt-3"
                            data-bs-toggle="modal"
                            data-bs-target="#modalMercado">
                        Ver detalhes
                    </button>
                </div>
            </div>
        </div>

        <!-- PROJETO 3 -->
        <div class="col-md-4">
            <div class="card shadow border-0 h-100 project-card">
                <div class="card-body">
                    <h4 class="fw-bold">
                        <i class="bi bi-tree text-warning me-2"></i>
                        AgroTech
                    </h4>
                    <p class="text-muted">
                        Sistema de gerenciamento agrícola.
                    </p>
                    <span class="badge bg-warning text-dark">PHP</span>
                    <button class="btn btn-outline-warning btn-sm mt-3"
                            data-bs-toggle="modal"
                            data-bs-target="#modalAgro">
                        Ver detalhes
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- MODAL 1 -->
<div class="modal fade" id="modalMikrotik" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-speedometer2 text-primary me-2"></i>
                    Dashboard MikroTik
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Dashboard para monitoramento de redes em tempo real utilizando FastAPI.</p>

                <hr>

                <h6>Tecnologias:</h6>
                <span class="badge bg-primary">FastAPI</span>
                <span class="badge bg-dark">Python</span>
                <span class="badge bg-info text-dark">MikroTik API</span>

                <hr>

                <h6>Funcionalidades:</h6>
                <ul>
                    <li>Monitoramento de rede</li>
                    <li>Status de dispositivos</li>
                    <li>Dashboard em tempo real</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>

<!-- MODAL 2 -->
<div class="modal fade" id="modalMercado" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-cart-check text-success me-2"></i>
                    Mini Mercado ERP
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Sistema completo de vendas e controle de estoque desenvolvido em Django.</p>

                <hr>

                <h6>Tecnologias:</h6>
                <span class="badge bg-success">Django</span>
                <span class="badge bg-dark">Python</span>

                <hr>

                <h6>Funcionalidades:</h6>
                <ul>
                    <li>Gestão de estoque</li>
                    <li>Controle de vendas</li>
                    <li>Relatórios administrativos</li>
                    <li>Controle Financeiro</li>
                    <li>Cadastro de Usuários</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>

<!-- MODAL 3 -->
<div class="modal fade" id="modalAgro" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-tree text-warning me-2"></i>
                    AgroTech
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Sistema de gerenciamento agrícola para controle de produção.</p>

                <hr>

                <h6>Tecnologias:</h6>
                <span class="badge bg-warning text-dark">PHP</span>
                <span class="badge bg-dark">MySQL</span>

                <hr>

                <h6>Funcionalidades:</h6>
                <ul>
                    <li>Gestão de produção</li>
                    <li>Controle agrícola</li>
                    <li>Relatórios</li>
                </ul>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>