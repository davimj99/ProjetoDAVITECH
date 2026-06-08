<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- CAROUSEL -->
<div id="carouselDaviTech" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="assets/images/FotoMinha.jpg"
                 class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h2>Quem Sou?</h2>
                <p>Desenvolvedor web que te ajudara.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/images/CampusParty.jpg"
                 class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h2>Desenvolvimento Web Profissional</h2>
                <p>Sites modernos e responsivos para empresas.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/images/API_Image.jpg"
                 class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h2>APIs e Integrações</h2>
                <p>FastAPI, Django e PHP para soluções escaláveis.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/images/Dashboards.jpg"
                 class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h2>Dashboards Inteligentes</h2>
                <p>Visualize dados e tome melhores decisões.</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselDaviTech"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselDaviTech"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- HERO -->
<section class="py-5 bg-light">
    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Transformando ideias em soluções digitais
        </h1>
        <p class="lead mt-3">
            Desenvolvimento Web • APIs • Sistemas • Dashboards <br>
            ChatsBot • N8N • Curriculos • Formatação de PC
        </p>

        <div class="mt-4">
            <a href="projetos.php"
               class="btn btn-primary btn-lg me-2">
                Ver Projetos
            </a>
            <a href="contato.php"
               class="btn btn-outline-dark btn-lg">
                Solicitar Orçamento
            </a>
        </div>
    </div>
</section>

<!-- SERVIÇOS -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2>Nossos Serviços</h2>
        <p class="text-muted">Soluções desenvolvidas sob medida para seu negócio.</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center">
                    <h4><i class="bi bi-globe2 me-2 text-primary"></i> Sites Profissionais</h4>
                    <p>Sites institucionais modernos, rápidos e responsivos.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center">
                    <h4><i class="bi bi-gear-fill me-2 text-dark"></i> Sistemas Web</h4>
                    <p>Sistemas administrativos personalizados para empresas.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center">
                    <h4><i class="bi bi-lightning-charge-fill me-2 text-warning"></i> APIs</h4>
                    <p>Integrações modernas com FastAPI, Django e PHP.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-primary stats-section">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-4 stats-box">
                <h1 class="counter" data-target="10">0</h1>
                <p>Projetos Desenvolvidos</p>
            </div>

            <div class="col-md-4 stats-box">
                <h1 class="counter" data-target="5">0</h1>
                <p>Tecnologias Dominadas</p>
            </div>

            <div class="col-md-4 stats-box">
                <h1 class="counter" data-target="100" data-suffix="%">0</h1>
                <p>Compromisso com Qualidade</p>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2>Projetos em Destaque</h2>
        <p class="text-muted">
            Alguns dos trabalhos desenvolvidos pela DaviTech.
        </p>
    </div>

    <div id="carouselProjetos" class="carousel slide shadow rounded overflow-hidden"
         data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button"
                    data-bs-target="#carouselProjetos"
                    data-bs-slide-to="0"
                    class="active"></button>

            <button type="button"
                    data-bs-target="#carouselProjetos"
                    data-bs-slide-to="1"></button>

            <button type="button"
                    data-bs-target="#carouselProjetos"
                    data-bs-slide-to="2"></button>
        </div>

        <!-- SLIDES -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/images/System_Senha.png"
                     class="d-block w-100"
                     style="height: 500px; object-fit: cover;"
                     alt="Sistema de Guichê">

                <div class="carousel-caption rounded bg-dark bg-opacity-75 p-0">
                    <h3>Sistema de Guichê</h3>
                    <p>Sistema de Controle, filas, gestão, atendimento personalizado</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/images/projeto2.jpg"
                     class="d-block w-100"
                     style="height: 500px; object-fit: cover;"
                     alt="Sistema de Vendas">

                <div class="carousel-caption bg-dark bg-opacity-75 rounded p-3">
                    <h3>Sistema de Vendas</h3>
                    <p>Plataforma desenvolvida com Django.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/images/projeto3.jpg"
                     class="d-block w-100"
                     style="height: 500px; object-fit: cover;"
                     alt="Portfólio Empresarial">

                <div class="carousel-caption bg-dark bg-opacity-75 rounded p-3">
                    <h3>Portfólio Empresarial</h3>
                    <p>Site institucional completo para negócios.</p>
                </div>
            </div>

        </div>

        <!-- CONTROLES -->
        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselProjetos"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#carouselProjetos"
                data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</section>

<!-- CTA -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h2>Pronto para tirar sua ideia do papel?</h2>
        <p class="lead">
            Entre em contato e vamos desenvolver seu próximo projeto.
        </p>
        <a href="contato.php"
           class="btn btn-light btn-lg">
            Falar Comigo
        </a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>