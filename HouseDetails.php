<?php
	include './Assets/Php/Connection.php';
	session_start();
	$Holder = $_SESSION['Holder'];

	$sql = "SELECT * FROM Properties WHERE PropertyID = $Holder";
	$rs = mysqli_query($conn,$sql);
	
	if($rs){
		while ($row = mysqli_fetch_assoc($rs)) {
			echo " Hello ".$row['Property'];
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amaresa: <?php echo "string"; ?></title>
</head>
<body>

</body>
</html>