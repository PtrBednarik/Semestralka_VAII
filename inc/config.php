
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








