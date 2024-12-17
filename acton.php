<?php 
include"dbcon.php";
$firstname=$_REQUEST['tfirstname'];
$lastname=$_REQUEST['tlastname'];
$email=$_REQUEST['temail'];
$address=$_REQUEST['taddress'];

echo $firstname.$lastname.$email.$address;

$sql="INSERT INTO tbstudent
        VALUE(null,'$firstname','$lastname','$email','$address')";
$query = $conn->query($sql);
echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-2.php'>";
?>