<link rel="stylesheet" href="..\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">



<div class="content">
    <form action="..\action.php" method="post">
        <div class="mb-3">
            <label class="from-label">ชื่อ</label>
            <input type="Text"class="form-control
            "name="firsname" placeholder="ชื่อ">
</div>
<div class="mb-3">
    <label class="form-label">นามสกุล</label>
    <input type="Text" class="form-control" 
    name="lastname" placeholder="นามสกุล"></textarea>
</div>
<div class="mb-3">
    <label class="form-label">ชื่อผู้ใช้'</label>
    <input type="Text" class="form-control" 
    name="username" placeholder="ชื่อผู้ใช้"> 

<div class="mb-3">
    <label class="form-label">password</label>
    <input type="password" class="form-control" 
    name="password" placeholder="ระบุรหัสผ่าน"> 

</div>
<div>
    <input type="submit" name="bSubmitUser" value="บันทึกข้อมูล">
    <input type="reset" name="bReset" value="เคลียข้อมูล">
</div>
</form>