<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pretty</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
<h1>My pretty</h1>
<?php 
	include("function.php");
	$linkdb = connect_db();
	$sql = "select prID,prName,prShape,prTel,prType,prRate,ag_ID from tb_pretty";
	$result = mysqli_query($linkdb,$sql);
	while ($rows = mysqli_fetch_array($result)) {
		# code...
		echo "<hr>";
		if ($rows["prType"] == "f") {
			# code...
			echo "<i class='fa fa-female green'></i>";
		} else {
			# code...
			echo "<i class='fa fa-female red'></i>";
		}
		echo "&nbsp;".$rows["prID"];
		echo "&nbsp;".$rows["prName"];
		echo "&nbsp;(".$rows["prShape"].")";
		echo "&nbsp;<i class='fa fa-mobile blue'></i>";
		echo "&nbsp;".$rows["prTel"];
		echo "&nbsp;<i class='fa fa-glass blue'></i>";
		echo "&nbsp;".$rows["prRate"];
		echo " บาท";
		echo  "&nbsp;".getAgency_Name($rows["ag_ID"]);
		//echo  "&nbsp;".getStar($rows["ag_ID"]);
		
	}
	echo "<hr>";
	echo "<i class='fa fa-female green'></i> fulltime <i class='fa fa-female red'></i> parttime";
 ?>
</body>
</html>