<?php 
include 'loginfiles\db_connect.php';
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

.header{
    width: 100%;
    height: 30%;
    background-color: seagreen;
}
input{
    width: 200px;
    height: 30px;
    border-radius: 10px;
}

.inner{
    width:200px;
    height:200px;
    margin-top: 10%;
    background-color:chartreuse;
    border-radius: 30px;
    padding-right: 10%;
    padding-left: 10%;
    
}
.outer{
    display:flex;
    justify-content: center;
}
.label{
    color:white;
}
</style>
</head>
<body>
    <div class="header"><button  formaction="loginfiles\createnew.php">Create an account</button></div> <br/>
    (Already have an account with us?) Sign-in below :
    <div class="outer">
    <div class="inner">
<form action="welcomepage.php" method="post">
    <div class="label">Username/Email:</div>    <input type="text" name="username" placeholder="blabbermouth" required autofocus> <br/>
    <div class="label">Password:</div>          <input type="password" name="password" placeholder="blabber@mouth" required> <br/> <br/>
    <input type="submit" value="Login">
</form> 
</div>
</div> 

<?php 
$uid=$_POST['username'];
$pwd=$_POST['password'];
?>
</body>
</html>