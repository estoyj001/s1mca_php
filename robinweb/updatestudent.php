<?php

include("conn.php");

$q="SELECT id FROM details";
$r=mysqli_query($conn,$q);

if(!$r)
    echo "ERROR";
else
{
    if(mysqli_num_rows($r) > 0)
    {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        background-color:lightblue;
        margin:10px;
    }
    label{
        padding:10px;
    }
</style>
<body>
    <form action="updatestudent.php" method="post">
    <label value="UPDATE STUDENT DETAILS">UPDATE STUDENT DETAILS</label><br><hr>

        <select name="id">STUDENT ID

        <?php

        while($res=mysqli_fetch_assoc($r))
        {
           echo "<option value='$res[id]'>$res[id]</option>";
        }
    }
}
?>
        </select>
        <br><hr>
        <label value="STUDENT NAME">STUDENT NAME</label>
        <input type="text" name="name" placeholder="studentname"><br>
        <label>SEMESTER</label>
        <input type="text" name="semester" placeholder="semester"><br>
        <label >COURSE NAME</label>
        <input type="text" name="course" placeholder="course name"><br>
        <label >ADDRESS</label>
        <input type="text" name="address" placeholder="address"><br>
        <label>GENDER </label>
        <input type="radio" name="gender" value="MALE">MALE
        <input type="radio" name="gender" value="FEMALE">FEMALE
        <input type="radio" name="gender" value="OTHER">OTHER<br>
        <label>PHONE NUMBER</label>
        <input type="text" name="phone" placeholder="phone number"><br>
        <br><hr>
        <input type="submit" name="submit" value="UPDATE" style="background-color:orange">
    </form>
    <br><hr>
    <a href="home.php">PREV</a>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $semester=$_POST['semester'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];

    $q="UPDATE details SET name='$name',semester='$semester',course='$course',address='$address',gender='$gender',phone='$phone' WHERE details.id='$id'";
    $r=mysqli_query($conn,$q);

    if(!$r)
        echo "bad ERROR";
    else 
        echo "<script>alert('1 row updated')</script>";
}
?>