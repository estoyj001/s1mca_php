<?php
$name = $_POST['name'];
$age = $_POST['age'];
$mail = $_POST['mail'];
$num = $_POST['num'];
$x = $_POST['lang'];
$secq = $_POST['sec'];


echo "

<h1>Registration Form Summary </h1>  
<table>
<tr>
<th> Name </th>
<td> $name </td>
</tr>
<tr>
<th> Age </th>
<td> $age </td>
</tr>
<tr>
<th> E-mail </th>
<td> $mail </td>


</tr>
<tr>
<th> Phone Number </th>
<td> $num </td>


</tr>
<tr>
<th> Languages Known </th>
<td>";
foreach($x as $lang){
    echo $lang." | ";
}  
echo "</td>
</tr>
<tr>

</tr>


</table>

";
?>