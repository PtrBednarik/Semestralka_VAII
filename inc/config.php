
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



