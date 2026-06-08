<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="index.php">
            <i class="bi bi-cpu-fill text-primary"></i>
            DaviTech
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item mx-1">
                    <a class="nav-link active" href="index.php">
                        <i class="bi bi-house-door me-1"></i> Home
                    </a>
                </li>

                <li class="nav-item mx-1">
                    <a class="nav-link" href="sobre.php">
                        <i class="bi bi-person me-1"></i> Sobre
                    </a>
                </li>

                <li class="nav-item mx-1">
                    <a class="nav-link" href="servicos.php">
                        <i class="bi bi-gear me-1"></i> Serviços
                    </a>
                </li>

                <li class="nav-item mx-1">
                    <a class="nav-link" href="projetos.php">
                        <i class="bi bi-kanban me-1"></i> Projetos
                    </a>
                </li>

                <!-- CONTATO DROPDOWN -->
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-bs-toggle="dropdown">
                        <i class="bi bi-envelope me-1"></i> Contato
                    </a>

                    <ul class="dropdown-menu dropdown-menu-dark shadow">
                        <li>
                            <a class="dropdown-item" href="contato.php">
                                <i class="bi bi-chat-left-text me-2"></i> Formulário
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://wa.me/5561992870108" target="_blank">
                                <i class="bi bi-whatsapp me-2 text-success"></i> WhatsApp
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://www.instagram.com/mjdavi99?igsh=MW80OWVlbW54Mm43OA==" target="_blank">
                                <i class="bi bi-instagram me-2 text-danger"></i> Instagram
                            </a>
                        </li>
                    </ul>

                </li>

                <!-- ADMIN -->
                <li class="nav-item ms-3">
                    <a class="btn btn-primary px-3" href="/DaviTech/admin/registro/login.php">
                        <i class="bi bi-shield-lock me-1"></i>
                        Área Admin
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</nav>