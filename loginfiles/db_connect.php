<?php 


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "data";

$db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("!Error. Can't connect to database.");
