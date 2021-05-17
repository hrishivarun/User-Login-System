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
<style>
html {
    background-color: rgba(63, 191, 255, .3);
}
form {
    width: 50%;
    height: 10%;
    position: relative;
    top: 30%;
    left: 45%;
}

</style>
</head>
<body>
    <button formaction="createnew.php">Create an account</button> <br/>
    (Already have an account with us?) Sign-in below :
<form action="mainpage.php" method="post">
    <div class="label">Username/Email:</div>    <input type="text" name="username" placeholder="blabbermouth" required autofocus> <br/>
    <div class="label">Password:</div>          <input type="password" name="password" placeholder="blabber@mouth" required> <br/> <br/>
    <input type="submit" value="Login">
</form> 

<?php 
    $sql = "SELECT password from data where username=";
?>  
</body>
</html>