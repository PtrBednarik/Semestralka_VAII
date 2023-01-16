<?php
session_start();

//$user_check = $_SESSION['login_user'];
$admin_check = $_SESSION['login_admin'];

//$ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
$sesAdmin_sql = mysqli_query($db,"select username from admins where username = '$admin_check' ");

//$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$rowAdmin = mysqli_fetch_array($sesAdmin_sql,MYSQLI_ASSOC);

//$login_session = $row['username'];
$loginAdmin_session = $rowAdmin['username'];

//if(!isset($_SESSION['login_user'])){
//    header("location:login.php");
//    die();
//}

if(!isset($_SESSION['login_admin'])){
    header("location:adminLogin.php");
    die();
}
?>
