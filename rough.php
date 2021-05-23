<?php 
include 'loginfiles/db_connect.php';
/*
CREATE TABLE `data`.`userdata` ( `ServerID` INT(5) NOT NULL , `Username` VARCHAR(255) on update CURRENT_TIMESTAMP NOT NULL , `Password`
 VARCHAR(255) on update CURRENT_TIMESTAMP NOT NULL , `Name` VARCHAR(255) on update CURRENT_TIMESTAMP NULL DEFAULT NULL , `CollegeID`
 INT NULL DEFAULT NULL , `Branch` VARCHAR(255) NULL DEFAULT NULL , `Jfield` VARCHAR(255) NULL DEFAULT NULL , `Company` VARCHAR(255)
 NULL DEFAULT NULL , `Email` VARCHAR(255) NULL DEFAULT NULL , `Contact` INT(10) NULL DEFAULT NULL , `ProfilePic` BLOB NULL DEFAULT NULL
, UNIQUE `Username` (`Username`), UNIQUE `CollegeID` (`CollegeID`), UNIQUE `Email` (`Email`), UNIQUE `ContactNumber` (`Contact`)) ENGINE
 = InnoDB;  
*/

?>
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
            <form action="submitdetails.php" method="POST" class="form">
            
                <div class="outer">
                    <div class="inner">
                        <div class="script">Create an unique username:</div>
                        <input type="text" name="name" placeholder="blabbermouth" required autofocus>
                        </div>
                        <br><br>
                     <div class="inner">
                        <div class="script">Create user password:</div>
                        <input type="password" name="pword" placeholder="blabbe@rmouth" required>
                    </div>
                    <br><br>
                    <div class="inner">
                        <div class="script">Confirm password:</div>
                        <input type="password" name="confirmpword" placeholder="blabbe@rmouth" required>
                    </div>
                    <br><br>
                    <button>proceed</button>
                </div>
                <br><br>
            </form>
        </div>
    </body>
</html>
<?php 
/*
if(isset($_POST['pword']) && isset($_POST['pword']) && isset($_POST['confirmpword'])) {
    $Uname= $_POST['uname'];
    $pwd= $_POST['pword'];
    $query= "INSERT INTO logindata (name, password) VALUES ('$Uname', '$pwd')";

}*/