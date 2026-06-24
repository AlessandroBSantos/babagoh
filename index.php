<?php
// index.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Babagoh - Encontre a Babá Ideal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    font-family: Arial, sans-serif;
}

.hero{
    background: linear-gradient(135deg,#0ea5e9,#0284c7);
    color:white;
    padding:100px 0;
}

.card-servico{
    transition:.3s;
}

.card-servico:hover{
    transform:translateY(-8px);
}

.btn-whatsapp{
    background:#25D366;
    color:white;
    font-weight:bold;
}

.btn-whatsapp:hover{
    background:#1da851;
    color:white;
}

footer{
    background:#0f172a;
    color:white;
    padding:30px 0;
}

</style>

</head>
<body>

<!-- MENU -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Babagoh
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->

<section class="hero text-center">

    <div class="container">

        <h1 class="display-4 fw-bold">
            Encontre a Babá Ideal para sua Família
        </h1>

        <p class="lead mt-4">
            Conectamos famílias a profissionais qualificadas,
            seguras e verificadas.
        </p>

        <a href="https://wa.me/5511999999999"
           target="_blank"
           class="btn btn-whatsapp btn-lg mt-3">

           Falar pelo WhatsApp
        </a>

    </div>

</section>

<!-- SOBRE -->

<section id="sobre" class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h2>Sobre a Babagoh</h2>

                <p>
                    A Babagoh nasceu com o objetivo de facilitar a busca
                    por babás qualificadas e confiáveis para cuidar do que
                    sua família tem de mais precioso.
                </p>

                <p>
                    Nossa plataforma conecta pais e responsáveis a
                    profissionais verificadas, proporcionando mais
                    segurança, praticidade e tranquilidade.
                </p>

            </div>

            <div class="col-md-6 text-center">

                <img src="assets/img/baba.jpg"
                     class="img-fluid rounded shadow">

            </div>

        </div>

    </div>

</section>

<!-- SERVIÇOS -->

<section id="servicos" class="bg-light py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2>Nossos Serviços</h2>

            <p>
                Soluções completas para o cuidado infantil.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="card card-servico shadow h-100">

                    <div class="card-body text-center">

                        <h4>Babá Diurna</h4>

                        <p>
                            Profissionais disponíveis durante o dia
                            para auxiliar sua família.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card card-servico shadow h-100">

                    <div class="card-body text-center">

                        <h4>Babá Noturna</h4>

                        <p>
                            Atendimento especializado para o período
                            noturno e emergências.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card card-servico shadow h-100">

                    <div class="card-body text-center">

                        <h4>Babás Verificadas</h4>

                        <p>
                            Cadastro validado com informações,
                            documentos e referências.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- BENEFÍCIOS -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2>Por que escolher a Babagoh?</h2>

        </div>

        <div class="row text-center">

            <div class="col-md-3">
                <h4>✓ Segurança</h4>
            </div>

            <div class="col-md-3">
                <h4>✓ Confiança</h4>
            </div>

            <div class="col-md-3">
                <h4>✓ Rapidez</h4>
            </div>

            <div class="col-md-3">
                <h4>✓ Qualidade</h4>
            </div>

        </div>

    </div>

</section>

<!-- CONTATO -->

<section id="contato" class="bg-primary text-white py-5">

    <div class="container text-center">

        <h2>Entre em Contato</h2>

        <p class="mt-3">
            Estamos prontos para ajudar você.
        </p>

        <h4>(19) 99999-9999</h4>

        <p>contato@babagoh.com.br</p>

        <a href="https://wa.me/5519999999999"
           target="_blank"
           class="btn btn-success btn-lg">

            Chamar no WhatsApp
        </a>

    </div>

</section>

<!-- RODAPÉ -->

<footer>

    <div class="container text-center">

        <h5>Babagoh</h5>

        <p>
            Conectando famílias e babás com segurança.
        </p>

        <small>
            © <?php echo date('Y'); ?> Babagoh - Todos os direitos reservados.
        </small>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
