
<?php
include 'inc/functions.php';

$ServerName = "localhost";
$UserName = "root";
$Password = "";

//Server connection
$Connection = new mysqli($ServerName, $UserName, $Password);
//Only check connection
if ($Connection -> connect_error){
    die("Zlyhanie pripojenia" . $Connection -> connect_error);
}





define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



