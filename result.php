<html>
    <head> 
        <title> Student Marks</title>
    </head>
    <body>
        <h2> Result  </h2>
        <form method="post" action="" >
            Roll Number : <input type="text" name="rollno"> <br> <br>
            
            <input type="submit">
        </form>
    </body>
</html>
<?php
include('connection.php');
$rn = $_POST['rollno'];

$q1 = "SELECT *FROM student WHERE RollNo=$rn";

$q = mysqli_query($con,$q1);
echo "<table>";
    if ($q) {
                    if (mysqli_num_rows($q)) {
                echo "
                
                    <tr> 
                        <th> Roll Number </th>
                        <th> Student Name </th>
                        <th> Marks </th>
                    </tr>";

                while ($row = mysqli_fetch_assoc($q)) {
                    echo "<tr>
                        <td> {$row['rollno']} </td>
                        <td> {$row['studname']} </td>
                        <td> {$row['marks']} </td>
                    </tr>";
                }

                echo "</table>";
            } else {
                echo "No records found.";
            }
        } else {
            echo "Query failed: " . mysqli_error($con);
        }

?>