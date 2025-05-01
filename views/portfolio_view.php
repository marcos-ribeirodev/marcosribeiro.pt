<?php
$imagem_portfolio = $lang === "en" ? "imagens/coming_soon.png" : "imagens/brevemente.png";
?>

<main class="portfolio-section">
    <h2><?= $texto_portfolio ?></h2>
    <div class="portfolio-grid">


        <div class="portfolio-card">
            <img src="<?= $imagem_portfolio ?>" alt="Em breve" class="portfolio-img" />
            <h3><?= $texto_portfolio_titulo ?></h3>
            <p><?= $texto_em_breve ?></p>
            <a href="#" class="btn"><?= $ver_mais ?></a>
        </div>
    </div>
</main>