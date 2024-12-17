<?php
    $name='สมชาย';
    $age=30;
    $career='รับจ้างทัวไป';
    echo "ชื่อ : ".$name. "<br>อายุ:".$age. "ปี<br>อาชืพ:".$career;echo"<hr>";
    echo "ชื่อ: $name<br>อายุ: $age ปี<br>อาชืพ: $career";echo"<hr>";
    echo 'ชื่อ: $name<br>อายุ: $age ปี<br>อาชืพ: $career';echo"<hr>";
    echo"อายุ: {$age}XD";
    echo"<hr>";

    echo"<h2>ตัวอย่งการใช้งาน Operator</h12>";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo "ผลรวมเท่ากลับ :".$sum;echo"<br>";
    $sum+=5;//มีควาหมายเทียบเท่ากับ sum=sum+2
    echo "ผลรวมเท่ากลับ :".$sum;echo"<br>";
    $sum-=3;
    echo "ผลรวมเท่ากลับ : ".$sum;echo"<br>";
    echo"<hr>";
    echo"<h2>ตัวอย่งการเพื่ม-ลดค่า </h2>";
    $count=1;
    $count++;
    $count+=2;
    $count*=2;
    $count*=2;
    echo  $count;

    echo"<h2>ตัวอย่งการใช้งาน Ternary</h2>";
    $x=30;
    $b =($x % 2== 0)? 'เลขคู่' : 'เลขคี่';
    echo "ผลสัพธ์ : ".$b;

    echo"<h2>การเช็คค่าว่าง</h2>";
    $user = 'user1';
    $password = '1234';
    $msg = ($user == '' || $password =='') ? 'กรุรากรอกข้อมูล' : 'ขอบคุณ';
    echo $msg;

    echo"<h2>การเช็คค่าว่าง</h2>";
    $user = 'user1';
    $password = '1234';
    if(empty($user) || empty($password)){
        $msg="กรุณากรอกข้อมูล";
    } else{
        $msg="ขอบคุณ";
    }
    echo $msg;
    echo"<hr>";
    echo"<h2>การใช้งาน if-else</h2>";
    $status="admin";
    if($status=="admin"){
        echo"I am admin";
    }elseif($status=="member"){
        echo"I am meber";
    }elseif($status=="manager"){
        echo"I am manager";
    }else{
        echo"invalid user status !!!.";
    }

    echo"<hr>";
    echo"<h2>การใช้งานเครื่องหมายเปรียบเทียน</h2>";
    $pw1 = 123;
    $pw2 = 456;
    if($pw1 != $pw2){
        echo 'รหัสผ่านไมตรงกัน';
    }else{
        echo 'รหัสผ่านตรงกัน';

    }
?>