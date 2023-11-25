<?php
$con = mysqli_connect('localhost','root','cetmca','junaid');
if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
}

$qry = "INSERT INTO student values(13,'Ajith',90)";
$q = mysqli_query($con,$qry);
if($q){
    echo "<br>query successful";
}


?>