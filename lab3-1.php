<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">



<div class="content">
    <form action="action.php" method="post">
        <div class="mb-3">
            <label class="from-label">BOOKNAME</label>
            <input type="text"class="form-control"name="bookname" placeholder="ชื่อหนังสือ">
</div>
<div class="mb-3">
    <label class="form-label">author</label>
    <textarea class="form-control" name="author" placeholder="ชื่อผู้แต่ง"></textarea>
</div>
<div class="mb-3">
    <label class="form-label">price'</label>
    <input type="number" class="form-control" name="price" placeholder="ราคาหนังสือ"> 

<div class="mb-3">
    <label class="form-label">stock</label>
    <input type="number" class="form-control" name="stock" placeholder="จำนวน"> 

<div class="mb-3">
    <label class="form-label">booktypeid</label>
    <select class="form-control" name="booktypeid" placeholder="ประเภท"> 

<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <option value="<?=$row->booktypeid?>">
        <?=$row->booktypename?></option>

<?php } ?>
        </select>
    </div>
<div>
        <button type="submit" name="bSubmitbook2" >บันทึกข้อมูล</button>
    </form>
</div>