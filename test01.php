<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>test ภาษาไทย</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
<div class="bighead_green">
	<span class="biggreen"><i class="fa fa-paw"></i></span>  
</div>
<?php 
	include("function.php");
	$link = connect_db();
	$sql = "select * from tb_pretty";
	$result = mysqli_query($link,$sql);
	while ($row = mysqli_fetch_array($result)) {
		# code...
		echo "<hr>";
		if ($row["prType"] == "f") {
			# code...
			echo "<i class='fa fa-female green'></i>";
		} else {
			# code...
			echo "<i class='fa fa-female red'></i>";
		}
		echo "&nbsp;".$row["prID"];
		echo "&nbsp;".$row["prName"];
		echo "&nbsp;(".$row["prShape"].")";
		echo "&nbsp;<i class='fa fa-mobile blue'></i>".$row["prTel"];
		echo "&nbsp;<i class='fa fa-glass blue'></i>".$row["prRate"];
		
	}
	echo "<hr>";
	echo "<i class='fa fa-female green'></i> Fulltime <i class='fa fa-female red'></i> Parttime  ";
	echo number_format("500000");
	
 ?>
</body>
</html>