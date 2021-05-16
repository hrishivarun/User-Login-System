<?php 
include_once 'db_connect.php';
?>

<!--HTML code --> 
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport", content="width=device-width, initial-scale=1.0"> 
<title>Connect Here</title>
<link rel="stylesheet" href="CSS.css">
</head>
<body>
<form action="mainpage.php" method="post">
Username/Email: <input type="text" name="username" required autofocus> <br/>
Password: <input type="password" name="password" required>
<input type="submit" value="Login">

</form> 
</body>
</html>