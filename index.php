<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Babagoh</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    margin:0;
    padding:0;
    font-family:Arial, Helvetica, sans-serif;
}

/* MENU */

.navbar{
    background:#1E2430;
}

.navbar-brand{
    font-size:2rem;
    font-weight:bold;
}

/* BANNER */

.hero-banner{
    background:url('assets/img/banner-babagoh.png');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    width:100%;
    height:700px;
}

/* SOBRE */

.sobre{
    padding:80px 0;
}

.sobre h2{
    margin-bottom:30px;
}

/* WHATSAPP FLUTUANTE */

.whatsapp-float{
    position:fixed;
    bottom:25px;
    right:25px;

    width:70px;
    height:70px;

    background:#25D366;
    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    color:#fff;
    text-decoration:none;

    font-size:40px;

    z-index:9999;

    box-shadow:0 5px 20px rgba(0,0,0,.3);

    transition:.3s;
}

.whatsapp-float:hover{
    transform:scale(1.1);
    color:#fff;
}

/* EFEITO PULSAR */

.whatsapp-float::before{
    content:'';
    position:absolute;

    width:100%;
    height:100%;

    background:#25D366;
    border-radius:50%;

    z-index:-1;

    animation:pulse 2s infinite;
}

@keyframes pulse{

    0%{
        transform:scale(1);
        opacity:.7;
    }

    70%{
        transform:scale(1.5);
        opacity:0;
    }

    100%{
        transform:scale(1.5);
        opacity:0;
    }

}

@media(max-width:768px){

    .hero-banner{
        height:500px;
        background-position:center;
    }

    .whatsapp-float{
        width:60px;
        height:60px;
        font-size:34px;
    }

}

</style>

</head>

<body>

<!-- MENU -->

<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <a class="navbar-brand" href="#">
            Babagoh
        </a>

        <button class="navbar-toggler"
                type="button"
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

<!-- BANNER -->

<section class="hero-banner"></section>

<!-- SOBRE -->

<section id="sobre" class="sobre">

    <div class="container">

        <h2>Sobre a Babagoh</h2>

        <p>
            A Babagoh nasceu com o objetivo de facilitar a busca por
            babás qualificadas e confiáveis para cuidar do que sua
            família tem de mais precioso.
        </p>

        <p>
            Nossa plataforma conecta pais e responsáveis a
            profissionais verificadas, oferecendo mais segurança,
            confiança e praticidade.
        </p>

    </div>

</section>

<!-- WHATSAPP FLUTUANTE -->

<a href="https://wa.me/5519992281863"
   target="_blank"
   class="whatsapp-float">

    <i class="fab fa-whatsapp"></i>

</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>