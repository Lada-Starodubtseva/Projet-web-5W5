<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font : DM Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Google Font : DM Serif Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body class="site">
    <header class="site__header">
        <div id="header-mobile" class="header-mobile">
        <img src="http://localhost:8080/5w5/wp-content/uploads/2023/11/TIM-Blanc.png" alt="logo">    
        <input class="menu-mobile" type="checkbox" id="menu-mobile">
            <label id="le-burger" class="burger" for="menu-mobile">
                <span class="ligne"></span>
                <span class="ligne"></span>
                <span class="ligne"></span>
            </label>
            <div id="le-menu" class="le-menu">
                <div class="centrer-menu">
                    <?php wp_nav_menu(array(
                        "menu" => "accueil",
                        "container" => "nav"
                    )) ?>
                    <div class="searchBox-mobile">
                        <?php dynamic_sidebar( 'header-recherche' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-ordi" class="header-ordi">
            <img src="http://localhost:8080/5w5/wp-content/uploads/2023/11/TIM-Blanc.png" alt="logo">
            <div class="menu">
                <nav class="nav">
                    <ul>
                        <a href="#cours">Cours</a>
                        <a href="#enseignants">Enseignant</a>
                        <a href="#projets">Projets</a>
                        <a href="#futur">Stages</a>
                    </ul>
                </nav>
                <div class="searchBox-ordi">
                    <?php dynamic_sidebar( 'header-recherche' ); ?>
                </div>
            </div>
        </div>
    </header>

<!--
    <img src="http://localhost:8080/5w5/wp-content/uploads/2023/11/TIM-Blanc.png" alt="logo">
            <input class="menu-mobile" type="checkbox" id="menu-mobile">
            <label id="le-burger" class="burger" for="menu-mobile">
                <span class="ligne"></span>
                <span class="ligne"></span>
                <span class="ligne"></span>
            </label>
            <div id="le-menu" class="menu">
                <nav class="nav">
                    <ul>
                        <a href="http://localhost:8080/5w5/front-page.php" id="btn-cours">Cours</a>
                        <a href="#enseignants" id="btn-profs">Enseignants</a>
                        <a id="btn-projets">Projets</a>
                        <a id="btn-stages">Stages</a>
                    </ul>
                    <div class="searchBox-mobile">
                    <dynamic_sidebar( 'header-recherche' ); ?>
                    </div>
                </nav>
            </div>
-->