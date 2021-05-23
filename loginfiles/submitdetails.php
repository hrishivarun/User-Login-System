<?php 
include_once 'db_connect.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport", content="width=device-width, initial-scale=1.0">
        <title>Create new account</title>
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
            <form target="../welcomepage.php" method="GET">
                    <div class="outer">
                        <div class="inner">
                            <div class="script">Name:  </div>
                            <input type="text" placeholder="Rampal" name="name" required>
                        </div> <br/><br/>
                        <div class="inner">
                            <div class="script">College Roll ID:</div>                       
                            <input type="number" name="roll" placeholder="18124" formmethod="POST" required="required">
                        </div> <br/><br/>
                        <div class="inner">
                            <div class="script">Branch you completed your degree in:</div>
                            <select name="branch" required>
                            <option value="CS">Computer Science</option>
                            <option value="EC">Electronics and Communication</option>
                            <option value="IT">Information Technology</option>
                            </select>
                        </div> <br/><br/>
                        <div class="inner">
                            <div class="script">Current Job Status:</div>                 
                            <select name="jfield" required>
                            <option value="MNC employee">MNC</option>
                            <option value="Government employee">Govermnet Sector</option>
                            <option value="Freelancer">Freelancing</option>
                            <option value="Jobless">Work free</option>
                            </select>
                        </div> <br/><br/>

       <!-- <select id="jtype" name="jtype" size="0">
        <option value="IT Sector">MNC</option>
        <option value="Management Sector">Govermnet Sector</option>
        <option value="">Freelancing</option>
        <option value="currently not working">Work free</option>
        </select><br>  -->
                        <div class="inner">
                            <div class="script">Company(If currently employed):</div> 
                            <input type="text" name="company" placeholder="Google/Adobe" formmethod="POST">
                        </div> <br/><br/>
                        <div class="inner">
                            <div class="script">Email ID:</div>
                            <input type="email" name="email" placeholder="18124@iiitu.ac.in" formmethod="POST" required >
                        </div> <br/><br/>
                        <div class="inner">
                            <div class="script">Contact-Number: </div>
                            <input type="number" name="contact" placeholder="9650820522" formmethod="POST" required>
                        </div> 
                        <br/><br/><br/>
                        <button type="submit" name="submit" value="Submit">Submit</button>
                    </div>
            </form>
        </div>

           
    </body>
</html>

<?php 
if(isset($_POST['name']) && isset($_POST['roll']) && isset($_POST['branch']) && isset($_POST['jfield'])
 && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['contact'])) {
    $Name= $_GET['name'];
    $Roll= $_POST['roll'];
    $Branch= $_GET['branch'];
    $Jfield= $_GET['jfield'];
    $Company= $_POST['company'];
    $Email= $_POST['email'];
    $Contact= $_POST['contact'];
    $Uname= $_SESSION['Uname'];
    $query= "INSERT INTO userdata (name, collegeid, branch, jdetails, company) VALUES ('$Name','$Roll','$Branch','$Jfield','$Company') WHERE username='$Uname' ";
    mysqli_query($conn, $query);
    $query= "INSERT INTO multidata (email, contact) VALUES ('$Email','$Company') WHERE username='$Uname' ";
    mysqli_query($db, $query);     
}
        
    ?>