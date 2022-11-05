<?php include 'Partials/header.php'; ?>
<?php
session_start();
if($_SESSION["loggedIn"] != true){
    echo 'not logged in';
    header("Location: login.php");
    exit;
}
?>



<?php include 'Partials/footer.php'; ?>




