<?php
    //เขียนแนน oop
    $conn=new mysqli();
    $conn->connect("localhost","root","","dbproject267");

    if($conn->connect_error){
        die($coon->connect_error);
    }
    $conn->set_charset("utf8");
    date_default_timezone_set('Asia/Bangkok');
?>