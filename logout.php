<?php include 'Partials/header.php'; ?>


<?php
session_start();

if(session_destroy()) {
    header("Location: index.php");
}

?>
<?php include 'Partials/footer.php'; ?>
