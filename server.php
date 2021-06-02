<?php 
session_start();

$db = mysqli_connect('localhost', 'root','', 'data') or die("!Error. Can't connect to database."); 
$error= array();
//main.php
if(!empty($_POST['uname'])){
    $uid= mysqli_real_escape_string($db, $_POST['uname']);
    $pwd= mysqli_real_escape_string($db, $_POST['pword']);
    $query= "SELECT password FROM userdata WHERE username= '$uid' ";
    $result= mysqli_query($db, $query); 
    $ans= mysqli_fetch_row($result);
    if($ans[0]==$pwd) {
        header('location: welcomepage.php');
    }else {
               echo "Wrong login details.";
        }
}

//createnew.php
if(!empty($_POST['Uname'])){
    $Name= mysqli_real_escape_string($db, $_POST['Name']);
    $Email= mysqli_real_escape_string($db, $_POST['Email']);
    $Contact= mysqli_real_escape_string($db, $_POST['Contact']);
    $Uname= mysqli_real_escape_string($db, $_POST['Uname']); $_SESSION['Uname']= $Uname;
    $Pword= mysqli_real_escape_string($db, $_POST['Pword']);
    $Pwordconfirm= mysqli_real_escape_string($db, $_POST['Confirmpword']);
    if($Pword!=$Pwordconfirm){echo "Passwords don't match. Click <a href='createnew.php'>here</a> to register again "; }
    else{
        $query="SELECT * FROM userdata WHERE username= '$Uname' LIMIT 1";
        $result1= mysqli_query($db, $query);
        $query="SELECT * FROM multidata WHERE email= '$Email' LIMIT 1";
        $result2= mysqli_query($db, $query);
        if(mysqli_fetch_row($result1) || mysqli_fetch_row($result2)){
            echo "Username or Email already exists. Click <a href='createnew.php'>here</a> to register again with another username."; }
        else{
            $query="INSERT INTO multidata (username, email, contact) VALUES ('$Uname', '$Email', '$Contact')";
            mysqli_query($db, $query);
            $query="INSERT INTO userdata (username, password, name) VALUES ('$Uname', '$Pword', '$Name')";
            mysqli_query($db, $query);
            header('location: submitdetails.php');
        }
    }
}    
    
//submitdetails.php
if(!empty($_POST['roll'])){
    $Roll= mysqli_real_escape_string($db, $_POST['roll']);
    $Branch= mysqli_real_escape_string($db, $_POST['branch']);
    $Jfield= mysqli_real_escape_string($db, $_POST['jfield']);
    $Company= mysqli_real_escape_string($db, $_POST['company']);
    $Uname= $_SESSION['Uname'];
    $query= "UPDATE userdata SET collegeid= '$Roll', branch= '$Branch', jdetails= '$Jfield', company= '$Company'
    WHERE username='$Uname' ";
    mysqli_query($db, $query);
    header('location: welcomepage.php');
    }
?>