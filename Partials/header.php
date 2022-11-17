<?php include 'inc/config.php'; ?>

<?php
//    session_start();
//    $_SESSION;
//
//    $user_data = check_login($con);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nebeský šramot</title>
    <meta charset="UTF-8">
<!------------------------------------------BOOTSTRAP------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<!------------------------------------------BOOTSTRAP------------------------------------->

    <link rel="stylesheet" href="Assets/CSS/style.css">
    <script src="Assets/JS/script.js"> </script>
<!----------------------------------FONTS-------------------------------------------------->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Domov</a></li>
            <li><a href="about.php">O nas</a></li>
            <li><a href="history.php">Historia</a></li>
            <li><a href="gallery.php">Galeria</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="news.php">Aktuality</a></li>



            <?php
            session_start();

            if (isset($_SESSION['login_user'])) {
                ?> <li><a href="info.php">Informacie</a></li> <?php
            }

            if (isset($_SESSION['login_user'])) {
                ?> <li><a class="login_title" href="logout.php">Odlhlasit</a></li> <?php
            } else {
               ?> <li><a class="login_title" href="login.php">Prihlásenie</a></li> <?php
            }


            session_write_close();
            ?>
        </ul>
    </nav>
</header>