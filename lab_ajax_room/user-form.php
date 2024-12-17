<link rel="stylesheet" href="..\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->
<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label>roomname</label>
          <input type="text" placeholder="Enter roomname" name="roomname" required>
          <label>detail</label>
          <input type="text" placeholder="Enter Email Address" name="detail" required>
          <label>roomtypeid</label>
          <select name="roomtypeid">
            <?php
             include 'database.php';
             $sql="SELECT * FROM tbroomtype;";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
        ?>
        <option value="<?=$row->roomtypeid?>">
            <?=$row->roomtypename?>
    </option>
<?php }?>         
          </select>
          <button type="submit">Submit</button>
    </form>
        </div>
</div>

<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
<h1 class="p1">
    <i class="fa-solid fa-house"></i> User Data </h1>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>roomtypename</th>
            <th>detail</th>
            <th>roomtypeid</th>

        </thead>
        <tbody>
<?php   
    $sql="SELECT * FROM tbroom INNER JOIN tbroomtype 
        on tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
<?php
    }
?>
</body>
</html>