<!DOCTYPE html>
<html>
    <head> 
        <title> Login Page </title>
        
    </head>
    <body>
        <h2> Login Here </h2>

    <form method="POST" action="">
         USERNAME :   <input type="text" name="mail"> <br>
         PASSWORD :   <input type="password" name="pswd"> <br>
            <input type="submit" name="submit" value="submit"> <br>
    <a href="register.php">  Not Yet Registered Yet? Sign Up </a>
        </body>
    </html>
<?php
$con = mysqli_connect('localhost','root','cetmca','junaid');

$u = $_POST['mail'];
$p = $_POST['pswd'];
$q = "SELECT * FROM login WHERE email='$u' and password='$p'";
$sql = mysqli_query($con,$q);
if(isset($_POST['submit'])){
    if(mysqli_num_rows($sql)){
        echo "<script> alert('loginnnnnnn') </script>"; 
    }
    else {
        echo "Login Failed";
    }
}
?>