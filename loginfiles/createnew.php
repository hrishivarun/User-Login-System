<?php 
include 'loginfiles\db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport", content="width=device-width, initial-scale=1.0"> 
    <title>Connect Here</title>
    <link rel="stylesheet" href="CSS.css">
    <style>
        .outer {
            display: flex;
            justify-content: center;
        }
        form {
            width:200px;
            height:100%;
            margin-top: 10%;
            background-color:chartreuse;
            border-radius: 30px;
            padding-right: 10%;
            padding-left: 10%;
        }
        input, select{
            width: 200px;
            height: 30px;
            border-radius: 10px;
        }
    </style>
</head>


<body>
    <div class="outer">
        <form action="submitdetails.php" method="POST">
            Create an unique username for your profile: 
            <input type="text" name="uname" placeholder="blabbermouth" required autofocus> <br/>      
            Create Password: 
            <input type="password" name="pword" placeholder="blabber@mouth" required> <br/>
            Confirm Password: 
            <input type="password" name="confirmpword" placeholder="blabber@mouth" required> <br/>
            <input type="submit" value="Proceed">
        </form>
    </div>
</body>
</html>
<?php 

if(isset($_POST['pword']) && isset($_POST['pword']) && isset($_POST['confirmpword'])) {
    $Uname= $_POST['uname'];
    $pwd= $_POST['pword'];
    $query= "INSERT INTO logindata (name, password) VALUES ('$Uname', '$pwd')";

}