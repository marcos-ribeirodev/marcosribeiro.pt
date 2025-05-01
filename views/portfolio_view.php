<?php
$imagem_portfolio = $lang === "en" ? "imagens/coming_soon.png" : "imagens/brevemente.png";
?>

<main class="portfolio-section">
    <h2><?= $texto_portfolio ?></h2>
    <div class="portfolio-grid">

        <div class="portfolio-card">
            <img src="imagens/personal.png" alt="Em breve" class="portfolio-img" />
            <h3><?= $texto_portfolio_titulo1 ?></h3>
            <p><?= $texto_em_breve1 ?></p>
            <a href="https://marcosribeiro.pt/" class="btn">Ver mais</a>
            <a href="https://github.com/marcos-ribeirodev/marcosribeiro.pt" class="btn">Github</a>

        </div>
        <div class="portfolio-card">
            <img src="imagens/construtora.png" alt="Em breve" class="portfolio-img" />
            <h3><?= $texto_portfolio_titulo2 ?></h3>
            <p><?= $texto_em_breve2 ?></p>
            <a href="https://marcosribeiro.pt/construcoes" class="btn">Ver mais</a>
            <a href="https://github.com/marcos-ribeirodev/construcoes" class="btn">Github</a>

        </div>

        <div class="portfolio-card">
            <img src="<?= $imagem_portfolio ?>" alt="Em breve" class="portfolio-img" />
            <h3><?= $texto_portfolio_titulo ?></h3>
            <p><?= $texto_em_breve ?></p>
            <a href="#" class="btn"><?= $ver_mais ?></a>
        </div>
    </div>
</main>