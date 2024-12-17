<?php
echo"<h2>การใช้ strlen</h2>";
$strlen="I am a steing";
echo strlen($strlen);
$strlen2="มหาวิทยาลัย";
echo"<br>";
echo strlen($strlen2);

echo"<h2>การใช้ explode(การสร้างสตริงจากอาร์เรย์)</h2>";
$expStr="I am a steing";
$expArr=explode(' ',$expStr);
print_r($expArr);
echo"<br>";
echo $expArr[0].$expArr[1].$expArr[2].$expArr[3];

echo"<h2>การใช้ implode(การสร้างอาร์เรย์จากสตริง)</h2>";
$impArr=["I","am","array"];
$impStr=implode($impArr);
echo",<br>";
$filename=['img123','png'];
$impFilename=implode('.',$filename);
echo $impFilename[0].$impFilename[1].$impFilename[2].
$impFilename[4].$impFilename[5];
echo"<br>";
echo $filename[0]."<br>";
echo $impFilename;

echo"<h2>การเข้ารหัสแบบmp5(มี 32 ตัวอักษร)</h2>";  
$password = "markkana";
$hashValue =md5($password);
echo $hashValue;
echo"<br>";

echo"<h2>การเข้ารหัสแบบ sha256 (มี 64 ตัวอักษร)</h2>";  
echo"<h2>การเข้ารหัสแบบ sha-256 เปินการเข้ารหัสแบบทางเดียว(one-way encryption) เนื่องจาก SHA-256
เปินฟังชั้นแฮชที่ออกแบบมาเพื่อความปลอดภัย</h2>"; 

echo"<br>";
$password="markkana";
$hashValue = hash('sha256',$password);
echo $hashValue;
echo"<br>";
$stordData ="a51218ba99fa63919768a666508ffb8f1e8ab987deb940354f3cb6b4a4059052";
$OriginalText = "markkana";
if(hash_equals(hash('sha256',$OriginalText),$stordData)){
    echo "ล็อคอินสำเร็จ";
}else{
    echo "รหัสไม่ถูกต้อง";
}
?>