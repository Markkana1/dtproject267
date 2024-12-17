<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


<div class="content col-4 m-auto">
    <div><h2 class="text-center">USER LOGIN</h2></div>
    <form action="../action.php" method="post">
        <div class="mb-3">
            <label class="form-label">USERNAME</label>
            <input type="text" 
            class="form-control form-control-lg"
            name="username"
            placeholder="ระบุชื่อผู้ใช้..." required>
        </div>
        <div class="mb-3">
            <label class="form-label">PASSWORD</label>
            <input type="password" 
            class="form-control form-control-lg"
            name="t=password"
            placeholder="ระบุรหัสผ่าน..." required>
        </div>
        <div>
            <input type="submit" name="bLogin"
            class="btn btn-primary btn-lg" value="เข้าสู่ระบบ">
        </div>
    </form>
</div>