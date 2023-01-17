<?php
session_start();

$admin_check = $_SESSION['login_admin'];

$sesAdmin_sql = mysqli_query($db,"select username from admins where username = '$admin_check' ");

$rowAdmin = mysqli_fetch_array($sesAdmin_sql,MYSQLI_ASSOC);

$loginAdmin_session = $rowAdmin['username'];

if(!isset($_SESSION['login_admin'])){
    header("location:adminLogin.php");
    die();
}
?>
