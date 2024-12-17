<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h1 class="p1">
    <i class="fa-light fa-house"></i>การใช้งาน css </h2>
<h2 class="p1">การใช้งาน css</h2>
<div class="content">

ภาษาที่ใช้สำหรับตกแต่งเอกสาร HTML/XHTML ให้มีหน้าตา สีสัน ระยะห่าง พื้นหลัง เส้นขอบและอื่นๆ ตามที่ต้องการ CSS ย่อมาจาก Cascading Style Sheets มีลักษณะเป็นภาษาที่มีรูปแบบในการเขียน Syntax แบบเฉพาะและได้ถูกกำหนดมาตรฐานโดย W3C เป็นภาษาหนึ่งในการตกแต่งเว็บไซต์ ได้รับความนิยมอย่างแพร่หลาย
</div>
<h2 class="p1">ความหมายของ css</h2>
<div class="content">
สำหรับใครที่อยากจะพัฒนาเว็บไซต์ของตัวเอง คุณต้องมีพื้นฐาน HTML มาก่อน ไม่ว่าคุณอยากจะทำ Portfolio เพื่อไว้เก็บผลงาน หรือ เว็บไซต์ในการขายของออนไลน์ที่มีความเเข่งขันสูง เราจะทำยังไงเพื่อที่จะดึงลูกค้า (User) ซึ่งการตกเเต่งเป็นปัจจัยหลักในการเข้าชมเว็บไซต์ต่างๆ ถ้าหากเป็นคุณที่เป็น User เอง คุณจะเลือกเข้าเว็บไซต์ที่ดูเชื่อถือได้ ดูดี ทันสมัยใช่ไหมครับ หากคุณอยากให้เว็บไซต์ของคุณสวยงาม ดูดี ทันสมัย เเละมี User มาใช้งานเป็นจำนวนมาก บทความลับสุดยอดตัวนี้ สามารถช่วยคุณได้
</div>

<h2 class="p1">
    <i class="fa-solid fa-list"><i> การสร้างฟอร์ม (FROM)</h2>
<div class="content">
    <form action="action.php" method="post">
        <div class="mb-3">
            <label class="from-label">FIRSTNAME</label>
            <input type="text"class="form-control"
            name="tfirstname"
            placeholder="ระบุชื่อ....">
</div>
    <div class="mb-3">
            <label class="from-label">LASTNAME</label>
            <input type="text"class="form-control"
            name="tlastname"
            placeholder="ระบุนานสกุล....">
</div>
    <div class="mb-3">
            <label class="from-label">EMAIL</label>
            <input type="text"class="form-control"
            name="temail"
            placeholder="ระบุอีเมล....">
            </div>
    <div class="mb-3">
    <label class="form-label">address</label>
    <textarea class="form-control" name="taddress" rows="3"></textarea>
</div>
        <div>
            <input type="submit"
            name="bSubmitStudent"
            value="บันทึกข้อมูล"></div>
    </form>
</div>
<?php
?>
