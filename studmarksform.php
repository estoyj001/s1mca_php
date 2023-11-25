<html>
    <head> 
        <title> Student Marks</title>
    </head>
    <body>
        <h2> Student Marks Collection </h2>
        <form method="post" action="" >
            Roll Number : <input type="text" name="rollno"> <br> <br>
            Student Name : <input type="text" name="studname"> <br> <br>
            Marks : <input type="number" name="marks"> <br> <br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
include('connection.php'); 
$rn = $_POST['rollno'];
$sn = $_POST['studname'];
$mk = $_POST['marks'];
$qry1 = "INSERT INTO student values($rn,'$sn',$mk)"; 
$q = mysqli_query($con,$qry1);
if($q){
    echo "<br>query successful";
}
else{
    echo "query failed";
}
?>