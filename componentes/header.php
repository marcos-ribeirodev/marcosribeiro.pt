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

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS Local-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <header>
        <div class="container-header d-none d-lg-flex">
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
        <div class="row d-flex d-lg-none navbar_row mobile m-0 p-0">

            <div class="col-12 px-0 ">

                <nav class="navbar navbar-expand-lg navbar-dark m-0">
                    <div class="container-fluid">
                        <div class="logo"><strong>Marcos Ribeiro</strong></div>
                        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?lang=<?= $lang ?>"><?= $nav_home ?></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="sobre.php?lang=<?= $lang ?>"><?= $nav_sobre ?></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="perfil.php?lang=<?= $lang ?>"><?= $nav_servicos ?></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="portfolio.php?lang=<?= $lang ?>"><?= $nav_portfolio ?></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contactos.php?lang=<?= $lang ?>"><?= $nav_contactos ?></a>
                                </li>
                                <li>
                                    <div class="idiomas">
                                        <a href="<?= $_SERVER['PHP_SELF'] ?>?lang=pt">
                                            <img src="imagens/pt.webp" alt="Português" class="bandeira" />
                                        </a>
                                        <a href="<?= $_SERVER['PHP_SELF'] ?>?lang=en">
                                            <img src="imagens/en.png" alt="English" class="bandeira" />
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

    </header>