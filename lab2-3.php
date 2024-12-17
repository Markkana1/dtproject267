<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h2 class="p1">ห้องไม่รู้ </h2>
<div class="content">  มีแต่ไม่รู้อยู่ไหน
</div>



<h1 class="p1">
    <i class="fa-solid fa-house"></i>ทกสอบดึงตาราง tbroom </h1>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPEID</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbroom";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomid?></td>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypeid?></td>
        </tr>
<?php
    }
?>
        <tbody>
    </table>
</div><a href="2-4.php">
        <button class="btn btn-primary">
        <i class="fa-solid fa-plus">      </i>ADD ROOM</button>
</a></div>

<h1 class="p1">
    <i class="fa-solid fa-house"></i>tbroomtype  </h1>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomtypeid?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
<?php
    }
?>
        <tbody>
    </table>
</div>



<h1 class="p1">
    <i class="fa-solid fa-house"></i>ทดสอบมากก่าว 1 ตาราง  </h2>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>ROOMNAME</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbroom
        INNER JOIN tbroomtype 
        on tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomname?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
<?php
    }
?>
        <tbody>
    </table>
</div>
<h1 class="p2">
    <i class="fa-solid fa-house"></i>BOOK</h1>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>BOOKNAME</th>
            <th>AUTHOR</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>BOOKTYPEID</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbbook
        INNER JOIN tbbooktype 
        on tbbook.booktypeid=tbbooktype.booktypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->bookname?></td>
            <td><?=$row->author?></td>
            <td><?=$row->price?></td>
            <td><?=$row->stock?></td>
            <td><?=$row->booktypeid?></td>
        </tr>
<?php
    }

?>
        </tbody>
    </table>
</div>
<h1 class="p1">
    <i class="fa-solid fa-house"></i>ประเภทหนังสือ </h2>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>booktypeid</th>
            <th>booktypname</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->booktypeid?></td>
            <td><?=$row->booktypename?></td>
        </tr>
<?php
    }
?>
        <tbody>
    </table>
</div>
</div><a href="lab3-1.php">
        <button class="btn btn-primary">
        <i class="fa-solid fa-plus">      </i>ข้อมูลหนังสือ</button>
</a></div>
</div><a href="lab3-2.php">
        <button class="btn btn-primary">
        <i class="fa-solid fa-plus">      </i>ประเภทหนังสือ</button>
</a></div>