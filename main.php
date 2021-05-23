<?php 
include 'loginfiles\db_connect.php';
?>

<!--HTML code --> 
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport", content="width=device-width, initial-scale=1.0"> 

<title>Connect Here</title>
<link rel="stylesheet" href="CSS.css"/>

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


.outer{
    display:flex;
    justify-content: center;
}
.label{
    color:white;
}



body {
                background-color: white;
                border-radius: 50px;
                padding: 5%;
            }
            form {
               
                
                background-color: darkgreen;
                border-radius: 30px;
                padding: 3% 5%;
                margin: 0 auto;
                box-shadow: 10px 10px 10px teal;
            }
            label{
                background-color: darkgoldenrod;
            }
            input, select{
                width: 250px;
                height: 30px;
                margin-bottom: .5em;
            
                border-radius: 5px;
            }
            button{
                width: 200px;
                height: 40px;   
                border-radius: 5px;
                margin-left:5%;
                background-color: thistle;
            }
            button:hover{
                background-color:green;
                transition:.4s ease;
            }
            .script{
                width: 300px;
                font-family: Arial, Helvetica, sans-serif;
                color: darkgray;
            }
            .outer{
                display: block;
            }
            .inner{
                display: flex;
            }
</style>
</head>

<body>
    <div class="outer">
        <form action="loginfiles\createnew.php">
        <button  type="submit">Create an account</button>
        </form>    
    </div> <br/>
    (Already have an account with us?) Sign-in below :<br/><br/><br/>
            <form action="welcomepage.php" method="POST">
                <div class="outer">
                    <div class="inner">
                        <div class="script">Username/Email:</div>    
                        <input type="text" name="uname" placeholder="blabbermouth" required autofocus>
                    </div>  <br/>
                    <div class="inner">
                        <div class="script">Password:</div>          
                        <input type="password" name="pword" placeholder="blabber@mouth" required>
                    </div> <br/> <br/>
                    <button type="submit">Submit</button>
                </div>
            </form> 
</body>
</html>

<?php  
if(isset($_POST['uname']) && isset($_POST['pword'])) {
$uid= $_POST['uname'];
$pwd= $_POST['pword'];
if(isset($uid)) {
    $query= "SELECT password FROM logindata WHERE username='$uid' ";
    $result= mysqli_query($db, $query); 
        while($ans= mysqli_fetch_assoc($result)) {
            if($ans['password']==$pwd) {
                header('location: welcompage.php');
            } else {
               echo "Wrong login details.";
            }
        }
    }  
}