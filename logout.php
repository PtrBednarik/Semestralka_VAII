<?php include 'Partials/header.php'; ?>

<?php
//    session_start();
//
//    if (isset($_SESSION['user_id'])) {
//        unset($_SESSION['user_id']);
//    }
//
//    header("Location: login.php");
//    die;
//
//?>

<?php
session_start();

if(session_destroy()) {
    header("Location: index.php");
}

?>
<?php include 'Partials/footer.php'; ?>
