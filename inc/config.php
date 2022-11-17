
<?php
include 'functions.php';

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "users";

//$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db) {
    die("Failed to connect!");
}


//$ServerName = "localhost";
//$UserName = "root";
//$Password = "";
//
////Server connection
//$Connection = new mysqli($ServerName, $UserName, $Password);
////Only check connection
//if ($Connection -> connect_error){
//    die("Zlyhanie pripojenia" . $Connection -> connect_error);
//}
//
//
//
//
//
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_DATABASE', 'users');
//$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



