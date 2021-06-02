<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport", content="width=device-width, initial-scale=1.0"> 
        <title>Connect Here</title>
        <link rel="stylesheet" href="CSS.css">
        <style>
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
                margin-top: .2em;
                margin-bottom: .2em;
                border-radius: 5px;
                margin-left:18%;
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
        <div class="container">
            <form method="POST"  autocomplete="off">
            
                <div class="outer">
                    <div class="inner">
                            <div class="script">Name:  </div>
                            <input type="text" placeholder="Rampal" name="NAME" formmethod="GET" required autofocus>
                        </div> <br/><br/>
                    <div class="inner">
                            <div class="script">Email ID:</div>
                            <input type="email" name="EMAIL" placeholder="18124@iiitu.ac.in"  required >
                        </div> <br/><br/>
                        <div class="inner">
                            <div class="script">Contact-Number: </div>
                            <input type="number" name="CONTACT" placeholder="9650820522"  required>
                        </div> <br/><br/>
                    <div class="inner">
                        <div class="script">Create an unique username:</div>
                        <input type="text" name="Uname" placeholder="blabbermouth" required >
                        </div>
                        <br><br>
                     <div class="inner">
                        <div class="script">Create user password:</div>
                        <input type="password" name="Pword" placeholder="blabbe@rmouth" required>
                    </div>
                    <br><br>
                    <div class="inner">
                        <div class="script">Confirm password:</div>
                        <input type="password" name="confirmpword" placeholder="blabbe@rmouth" required>
                    </div>
                        <br/><br/><br/>
                    <button>Proceed</button>
                </div>
                <br><br>
            </form>
        </div>
    </body>
</html>

<?php 
    include 'loginfiles\db_connect.php';
$duplicate_user= "SELECT * FROM userdata WHERE collegeid = 18142";
$result= mysqli_query($db, $duplicate_user);
$user= mysqli_fetch_assoc($result);
echo $user['username'];
$Name= $_GET['NAME'];
$Email= $_POST['EMAIL'];
$Contact= $_POST['CONTACT'];
$Uname= $_POST['Uname'];
$pwd= $_POST['Pword'];
if(isset($_GET['NAME']) && isset($_GET['EMAIL']) && isset($_GET['CONTACT']) && isset($_GET['Uname']) && isset($_GET['Pword'])){
    $query= "INSERT INTO multidata (username, email, contact) VALUES ('$Uname','$Email','$Contact')  ";
    mysqli_query($db, $query);
    $query= "INSERT INTO userdata (username, password, name) 
    VALUES ('$Uname', '$pwd', '$Name') ";
    mysqli_query($db, $query);
    //header('location: "main.php" ');
        
}