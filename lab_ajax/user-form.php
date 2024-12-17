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
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="fullName" required>
          <label>Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="emailAddress" required>
          <label>City</label>
          <input type="city" placeholder="Enter Full City" name="city" required>
          <label>Country</label>
          <input type="text" placeholder="Enter Full Country" name="country" required>
          <button type="submit">Submit</button>
    </form>
        </div>
</div>
<?php
    include 'database.php';   
?>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
<h1 class="p1">
    <i class="fa-solid fa-house"></i> User Data </h1>
<div class="content">  
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Country</th>
            <th>Date</th>
        </thead>
        <tbody>
<?php   
    $sql="SELECT * FROM usertable;";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->fullName?></td>
            <td><?=$row->emailAddress?></td>
            <td><?=$row->city?></td>
            <td><?=$row->country?></td>
            <td><?=$row->created_at?></td>
        </tr>
<?php
    }
?>
</body>
</html>