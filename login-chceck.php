<?php
include 'inc/config.php';

session_start();


$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);

$sql = "select username, heslo from user where username = '$username' and heslo = '$password'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    echo "<h1 style='margin-top: 100px'> Login successful</h1>";
    $_SESSION["loggedIn"] = true;
    header("location: login.php");

}
else{
    echo "<h1> Login failed. Invalid username or password.</h1>";
}

?>