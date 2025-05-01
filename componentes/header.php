<?php
// Verifica o idioma pela URL e carrega o ficheiro de tradução
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';
include("lang/$lang.php");
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marcos Ribeiro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <header>
        <div class="container-header">
            <div class="logo"><strong>Marcos Ribeiro</strong></div>

            <div class="menu-idiomas">
                <nav>
                    <a href="index.php?lang=<?= $lang ?>"><?= $nav_home ?></a>
                    <a href="sobre.php?lang=<?= $lang ?>"><?= $nav_sobre ?></a>
                    <a href="perfil.php?lang=<?= $lang ?>"><?= $nav_servicos ?></a>
                    <a href="portfolio.php?lang=<?= $lang ?>"><?= $nav_portfolio ?></a>
                    <a href="contactos.php?lang=<?= $lang ?>"><?= $nav_contactos ?></a>
                </nav>

                <div class="idiomas">
                    <a href="<?= $_SERVER['PHP_SELF'] ?>?lang=pt">
                        <img src="imagens/pt.webp" alt="Português" class="bandeira" />
                    </a>
                    <a href="<?= $_SERVER['PHP_SELF'] ?>?lang=en">
                        <img src="imagens/en.png" alt="English" class="bandeira" />
                    </a>
                </div>
            </div>
        </div>
    </header>