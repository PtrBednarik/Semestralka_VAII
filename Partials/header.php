<?php include 'inc/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nebeský šramot</title>
    <meta charset="UTF-8">
<!------------------------------------------BOOTSTRAP------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>



    <link rel="stylesheet" href="Assets/CSS/style.css">
    <script src="Assets/JS/script.js"> </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2_5soo06q4-R3o7pHsU5tKTewtPcuEII&callback=initMap&v=weekly"
        defer
    ></script>

    <!----------------------------------FONTS-------------------------------------------------->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0,
     maximum-scale=1.0, user-scalable=no">

</head>

<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Domov</a></li>
            <li><a href="news.php">Aktuality</a></li>
            <li><a href="gallery.php">Galéria</a></li>
            <li><a href="history.php">História</a></li>
            <li><a href="about.php">O nás</a></li>
            <li><a href="contact.php">Kontakt</a></li>

            <!---------Co sa zobrazi po prihlaseni, SEM :------------->
            <?php
            session_start();

            if (isset($_SESSION['login_user'])) {
                ?>
            <li><a href="info.php">Informácie</a></li>
            <?php
            }
            if (isset($_SESSION['login_user'])) {
                ?>
            <li><a class="login_title" href="logout.php">Odhlásiť</a></li>
            <?php
            } else {
               ?>
            <li><a class="login_title" href="login.php">Prihlásenie</a></li>
            <?php
            }
            session_write_close();
            ?>
        </ul>
    </nav>
            <!--Porgress bar Script-->
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</header>