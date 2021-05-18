<?php 
include 'loginfiles\db_connect.php';
include 'main.php';
?>

<?php 
if(isset($_POST['username'])) {
    $query = "SELECT password FROM logindata WHERE username='$uid' ";
    $result=mysqli_query($conn, $query); 
        while($ans=mysqli_fetch_assoc($result)) {
            if($ans['password']==$pwd) {
            echo "Login successful!";
            } else {
            echo "ERROR! Wrong password. Login failed.";
            }
        }
}  
else {
    echo "Err. Invalid username";
}  
    
?>