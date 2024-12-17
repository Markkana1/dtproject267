<?php
    include"dbcon.php"; 
    if(isset($_REQUEST['bSubmitStudent'])){
    $firstname=$_REQUEST['tfirstname'];//รับค่าจาก texbox ที่ชื่อtfirsname
    $lastname=$_REQUEST['tlastname'];
    $email=$_REQUEST['temail'];
    $address=$_REQUEST['taddress'];

    echo $firstname.$lastname.$email.$address;
    $sql="INSERT INTO tbstudent
            VALUE(null,'$firstname','$lastname','$email','$address')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh'
                        CONTENT='1; URL=lab2-3.php'>";//รอ3วิและกดกลับไปห้องจอ lab2-2.php
    
    
}elseif(isset($_REQUEST['bSubmitroom'])){
        $roomname=$_REQUEST['troomname'];
        $detail=$_REQUEST['tdetail'];
        $roomtype=$_REQUEST['trootype'];
        echo $roomname.$detail.$roomtype;
    $sql="INSERT INTO tbroom
            VALUE(null,'$roomname','$detail','$roomtype')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh'
                        CONTENT='1; URL=lab2-3.php'>";

    }elseif(isset($_REQUEST['bSubmitbook2'])){
        $bookname=$_REQUEST['bookname'];
        $author=$_REQUEST['author'];
        $price=$_REQUEST['price'];
        $stock=$_REQUEST['stock'];
        $booktypeid=$_REQUEST['booktypeid'];
        echo $bookname.$author.$price. $stock.$booktypeid;
    $sql="INSERT INTO tbbook
            VALUE(null,'$bookname','$author','$price','$stock','$booktypeid')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh'
                        CONTENT='1; URL=lab2-3.php'>";

    }elseif(isset($_REQUEST['bSubmitbook1'])){
        $booktypename=$_REQUEST['booktypename'];
        echo $booktypename; 
    $sql="INSERT INTO tbbooktype
            VALUE(null,'$booktypename')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh'
                        CONTENT='1; URL=lab2-3.php'>";

    }elseif(isset($_REQUEST['bSubmitUser'])){
        $firstname=$_REQUEST['firsname'];
        $lastname=$_REQUEST['lastname'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $hashValue=md5($password);
        $sql="INSERT INTO tbuser VALUE(null,'$firstname','$lastname','$username','$hashValue')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab-function\labfromregis.php'>";
    }elseif(isset($_REQUEST['bLogin'])){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['t=password'];
        $hashValue=md5($password);
        $sql="SELECT * FROM tbuser
                WHERE username='$username'
                and password='$hashValue'";
                $query=$conn->query($sql);
                $rs=$query->fetch_object();
                $numrows=$query->num_rows;
        if($numrows>0){
                echo"ล็อคอินสำเร็จ";
        }else{
                echo"ชื่อหรือรหัสไม่ถูกต้อง";
        }
    }
?>
