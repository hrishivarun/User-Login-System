<?php 

session_start();
$db = mysqli_connect('localhost', 'root','', 'data') or die("!Error. Can't connect to database.");

$query= "INSERT INTO userdata (username, password, name, collegeid, company) 
VALUES ('gjkyhf', 'Pword', 'Name', 27248, 'cify')";
mysqli_query($db, $query);
?>
