<?php

include("conn.php");

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $semester=$_POST['semester'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];

    $q="SELECT id FROM details WHERE id='$id' ";
    $r=mysqli_query($conn,$q);

    if(!$r)
    {
        echo "Error";
    }
    else
    {
        if(mysqli_num_rows($r) > 0)
        {
            echo "STUDENT ALREADY PRESENT!";
        }
        else
        {
            $q="INSERT INTO details VALUES ('$id','$name','$semester','$course','$address','$gender','$phone')";
            $r=mysqli_query($conn,$q);

            if(!$r)
            {
                echo "ERROR";
            }
            else
            {
                echo "<script>alert('1 row inserted!')</script>";
            }
        }
    }
}
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
    <form action="addstudent.php" method="POST">
        <label value="ENTER STUDENT DETAILS">ENTER STUDENT DETAILS</label>
        <br><hr>
        <label value="">STUDENT ID:    </label>
        <input type="text" name="id" placeholder="student ID" required><br>
        <label value="STUDENT NAME">STUDENT NAME:  </label>
        <input type="text" name="name" placeholder="studentname" required><br>
        <label>SEMESTER:    </label>
        <input type="text" name="semester" placeholder="semester" required><br>
        <label >COURSE NAME:  </label>
        <input type="text" name="course" placeholder="course name" required><br>
        <label >ADDRESS:    </label>
        <input type="text" name="address" placeholder="address" required><br>
        <label>GENDER: </label>
        <input type="radio" name="gender" value="MALE" required>MALE
        <input type="radio" name="gender" value="FEMALE" required>FEMALE
        <input type="radio" name="gender" value="OTHER" required>OTHER<br>
        <label>PHONE NUMBER: </label>
        <input type="text" name="phone" placeholder="phone number" required><br>
        <br><hr>
        <input type="submit" name="submit" value="ADD" style="background-color:yellow">

    </form>
    <br><hr>
    <a href="home.php">PREV</a>
</body>
</html>