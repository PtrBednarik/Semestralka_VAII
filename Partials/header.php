<?php include '../../inc/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nebeský šramot</title>
    <meta charset="UTF-8">
<!------------------------------------------BOOTSTRAP------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>



    <link rel="stylesheet" href="../../Assets/CSS/style.css">
    <script src="../../Assets/JS/script.js"> </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2_5soo06q4-R3o7pHsU5tKTewtPcuEII&callback=initMap&v=weekly"
        defer
    ></script>

    <!----------------------------------FONTS-------------------------------------------------->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0,
     maximum-scale=1.0, user-scalable=no">

</head>

<body>

<header>
    <nav class="navigation">
        <ul class="menu">
            <div class="logo">
                <a href="../Public/index.php">
                    <img class="logo-img" src="../../Assets/CSS/Images/music.png" alt="Home_page_noticka">
                </a>
            </div>
            <li><a href="../Public/index.php">Domov</a></li>
            <li><a href="../Public/news.php">Aktuality</a></li>
            <li><a href="../Public/gallery.php">Galéria</a></li>
            <li><a href="../Public/history.php">História</a></li>
            <li><a href="../Public/about.php">O nás</a></li>
            <li><a href="../Public/contact.php">Kontakt</a></li>

            <!---------Co sa zobrazi po prihlaseni, SEM :------------->
            <?php
            session_start();

            if (isset($_SESSION['login_user']) || isset($_SESSION['login_admin'])) {
                ?>
            <li><a href="../Public/info.php">Informácie</a></li>
            <?php
            }
            if (isset($_SESSION['login_user']) || isset($_SESSION['login_admin'])) {
                ?>
            <li><a class="login_title" href="../Actions/logout.php">Odhlásiť</a></li>
            <?php
            } else {
               ?>
            <li><a class="login_title" href="../Public/login.php">Prihlásenie</a></li>
            <?php
            }
            session_write_close();
            ?>
            <img class="hamburger-icon" src="../../Assets/CSS/Images/hamburger.png" alt="Hamburger_menu" onclick="showMobMenu()">
        </ul>
    </nav>


            <!--Progress bar Script-->
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</header>
<!----------------------------------MOBILNE MENU--------------------------->
<header>
    <nav class="navigation-Mob">
        <ul class="menu-Mob" id="menuMob">
            <img class="iksko-icon" src="../../Assets/CSS/Images/xButton.png" alt="Hamburger_menu" onclick="hideMobMenu()">
            <li><a href="../Public/index.php">Domov</a></li>
            <li><a href="../Public/news.php">Aktuality</a></li>
            <li><a href="../Public/gallery.php">Galéria</a></li>
            <li><a href="../Public/history.php">História</a></li>
            <li><a href="../Public/about.php">O nás</a></li>
            <li><a href="../Public/contact.php">Kontakt</a></li>

            <!---------Co sa zobrazi po prihlaseni, SEM :------------->
            <?php
            session_start();

            if (isset($_SESSION['login_user'])) {
                ?>
                <li><a href="../../Public/info.php">Informácie</a></li>
                <?php
            }
            if (isset($_SESSION['login_user'])) {
                ?>
                <li><a class="login_title" href="../Actions/logout.php">Odhlásiť</a></li>
                <?php
            } else {
                ?>
                <li><a class="login_title" href="../Public/login.php">Prihlásenie</a></li>
                <?php
            }

            if (isset($_SESSION['login_user'])) {
                ?>
                <li><p>Vitaj, uživateľ <?php echo $_SESSION['login_user'] ?></p></li>
                <?php
            }

            session_write_close();
            error_reporting(0)
            ?>
        </ul>
    </nav>
</header>