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
            <form target="logindetails.php" method="GET">
                    Name: <br/> <input type="text" placeholder="Rampal" name="name" required> <br/>
                    College Roll ID: <br/> 
                    <input type="number" name="roll" min="14101" max="21360" formmethod="POST" required="required"> <br/>
                    Branch you completed your degree in: <br/> 
                    <select name="branch" required>
                    <option value="CS">Computer Science</option>
                    <option value="EC">Electronics and Communication</option>
                    <option value="IT">Information Technology</option>
                    </select> <br/>
                    Current Job Status: <br/>
                    <select name="jfield" formmethod="POST" required>
                    <option value="working in a MNC">MNC</option>
                    <option value="working for government">Govermnet Sector</option>
                    <option value="freelancer">Freelancing</option>
                    <option value="currently not working">Work free</option>
                    </select> <br/>

       <!-- <select id="jtype" name="jtype" size="0">
        <option value="IT Sector">MNC</option>
        <option value="Management Sector">Govermnet Sector</option>
        <option value="">Freelancing</option>
        <option value="currently not working">Work free</option>
        </select><br>  -->
                    Company Name: <br/> <input type="text" name="company" formmethod="POST" placeholder="Google/Adobe" > <br/>
                    Email ID: <br/> <input type="email" name="email" placeholder="18124@iiitu.ac.in" formmethod="POST" required > <br/>
                    Contact-Number: <br/> <input type="number" name="contact" placeholder="9650820522" formmethod="POST" required> <br/> 
        
                    <input type="submit" name="submit" value="Submit">
        </form>
        </div>

           
    </body>
</html>

<?php 
if(isset($_POST['name']) && isset($_POST['roll']) && isset($_POST['branch']) && isset($_POST['jfield'])
 && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['contact'])) {
    $Name= $_POST['name'];
    $Roll= $_POST['roll'];
    $Branch= $_POST['branch'];
    $Jfield= $_POST['jfield'];
    $Company= $_POST['company'];
    $Email= $_POST['email'];
    $Contact= $_POST['contact'];
    $query= "INSERT INTO logindata (name, roll, branch, jfield, company, email) VALUES ('$Name','$Roll','$Branch','$Jfield','$Company','$Contact') WHERE username='' ";
    mysqli_query($conn, $query);     
}
        
    ?>