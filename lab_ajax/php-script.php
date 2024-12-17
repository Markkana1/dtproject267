<?php
include('database.php');
$db=$conn;// database connection  
//legal input values
 $fullName     = legal_input($_POST['fullName']);
 $emailAddress = legal_input($_POST['emailAddress']);
 $city         = legal_input($_POST['city']);
 $country      = legal_input(($_POST['country']));
   
if(!empty($fullName) && !empty($emailAddress) && !empty($city) && !empty($country)){
    //  Sql Query to insert user data into database table
    Insert_data($fullName,$emailAddress,$city,$country);
}else{
 echo "All fields are required";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
// // function to insert user data into database table
 function insert_data($fullName,$emailAddress, $city, $country){
 
     global $db;
      $query="INSERT INTO usertable(fullName,emailAddress,city,country) VALUES('$fullName','$emailAddress','$city','$country')";
     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
       echo "<META HTTP-EQUIV='refresh' CONTENT='3; '>";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }
?>