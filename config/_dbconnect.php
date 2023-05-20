<?php
// Script to connect to the database

define('SITEURL','http://localhost/Forum/');

$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start();

?>