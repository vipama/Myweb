<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ทดสอบภาษาไทย</title>
</head>
<body bgcolor='Orange'>
<?php
//-----------------------------Declare variable-------------------------
$MemberName = "vipama";
$Brand = "Samsung Note 10.1";
$Price = 20000;
$Tag_7 = ($Price*7)/100;
$Discount = ($Price*10)/100;
$CardDiscount = 1500;
//----------------------------------------------------------------------
echo "<table border='1' cellspacing='0' cellpadding='0' border='0' align='center' width='70%' bgcolor='lightyellow'><tr><td>";
echo "<table width='100%' cellspacing='3' cellpadding='3' border='0' align='center'><tr><td align='center'>";
echo "--------------------------------รายการสินค้า--------------------------------";
echo "</td></tr>";
echo "<tr><td>";
echo "ชื่อสินค้า : ".$Brand;
echo "</td></tr>";
echo "<tr><td>";
echo "ราคา : ".$Price." บาท";
echo "</td></tr>";
echo "<tr><td>";
echo "ค่าภาษี : ".$Tag_7." บาท";
echo "</td></tr>";
echo "<tr><td>";
echo "ราคาสุทธิ : ".($Price+$Tag_7)." บาท";
echo "</td></tr>";
echo "<tr><td>";
echo "ถ้าเป็นสมาชิกจะลดทันทีอีก 10%  เป็นเงิน : ".(($Price*10)/100)." บาท";
echo "</td></tr>";
echo "<tr><td>";
echo "<hr>";
echo "</td></tr>";
if($MemberName == "vipama")
{
	echo "<tr><td>คุณ : ".$MemberName."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานะ : สมาชิก <hr></td></tr>";
	if( (($Price+$Tag_7)-$Discount) > 15000) 
	{
		#Comment code
		echo "<tr><td>ราคาสินค้าแพงไป กรุณาใช้บัตรเงินสดร่วมด้วย</td></tr>";
		echo "<tr><td>จะลดราคาลงอีก : ".$CardDiscount." บาท จากราคา : ".(($Price+$Tag_7)-$Discount)." บาท</td></tr>";
		echo "<tr><td>จะเหลือแค่ : ".((($Price+$Tag_7)-$Discount)-$CardDiscount)." บาท</td></tr>";
	}else{
		echo "<tr><td>ราคาสินค้าลดแล้วไม่ต้องใช้บัตรเงินสดร่วม</td></tr>";
	}	
}elseif (is_null($MemberName) == true) {
	# code...
	echo "<tr><td>คุณไม่ได้เป็นสมาชิก <br /> กรุณาสมัครสมาชิกก่อนจะได้รับสิทธิพิเศษ</td></tr>";
}
echo "<tr><td align='center'>------------------------------รายการของแถม------------------------------</td></tr>";
echo "<tr><td>1.ฟิมล์กันรอยหน้าจอ</td></tr>";
echo "<tr><td>2.เคสใส</td></tr>";
echo "</table>";
echo "</td></tr></table>";
?>
</body>
</html>