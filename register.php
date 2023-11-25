<!DOCTYPE html>
<html>
    <head> 
        <title> Login Page </title>
        
    </head>
    <body>
        <h2> Register </h2>
    <form method="POST" action="">
        NAME : <input type="text" name="naeem"> <br> <br>
         USERNAME :   <input type="text" name="email"> <br> <br>
         PASSWORD :   <input type="password" name="pswd"> <br> <br>
            <input type="submit" name="submit" value="submit"> <br> <br>
            <a href="loginform.php"> Already Signed Up? </a>
</body>
    </html>
    <?php
$con = mysqli_connect('localhost','root','cetmca','junaid');

$u = $_POST['email'];
$p = $_POST['pswd'];
$n = $_POST['naeem'];
$qry = "INSERT INTO student('$n','$u','$p')";
$sql = mysqli_query($con,$qry);
if(isset($_POST['submit'])){
if($sql){
    echo "Registration Successful";
    
}
else{
    echo "Registration Failed";
}
}

?>