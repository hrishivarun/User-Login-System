<?php 
session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "data";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("!Error. Can't connect to database.");
