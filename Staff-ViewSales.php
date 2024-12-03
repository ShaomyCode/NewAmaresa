<?php
	session_start();
	include './Assets/Php/Connection.php';
	$Owner = $_SESSION['Owner'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - View Pending</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Content.css?v=<?php echo time(); ?>"> 
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>"> 
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">	
</head>
<body>
	<header class="header" id="header">
		<div class="container">
			<div class="Personal-Details">
				<div class="Personal-Admin-Container">
					<h3 class="h3 Personal-Title"> WELCOME, </h3> 
					<span class="AdminName"> Admin Here </span>
				</div>
				<span class="Personal-tag"> Admin </span>
				<span class="callouts">Manage Properties and Users. </span>
			</div>
			<div  class="Logout">
				<a href="./Admin-SoldProperties.php" class="btn"> 
					<i class="fa-solid fa-right-from-bracket"></i>
					<span> Go back </span>
				</a>
			</div>
		</div>
	</header>

	<main>
		<section class="Update-container" id="Update-container">
			<div class="container">
				<div class="Update-display">
					<?php
						if(isset($_GET['UpdateID'])){
							$UpdateID = $_GET['UpdateID'];

							$sql = "   * FROM sales WHERE SaleID = $UpdateID ";
							$rs = mysqli_query($conn,$sql);
							if($rs){
								while ($row = mysqli_fetch_assoc($rs)) {
									$Property = $row['Property'];
									$Current = $row['CurrentOwner'];
									$_SESSION['Owner'] = $Current;
									$Date = $row['Date_Purchased'];
									echo "
									<h3 class='Update-title'> Overview of the owner</h3>
									<p class='Update-subtitle'> A Summary of Important Details </p>

									<div class='Update-items'>
										
										<input type='text' value='$Property' readonly>
									</div>									

									<div class='Update-items'>
										
										<input type='text' value='$Current' readonly>
									</div>

									<div class='Update-items'>
										<input type='text' value='$Date' readonly>
									</div>

									";
								}
							}
						}
					?>
				</div>
>
			</div>
		</section>
	</main>

	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/UploadImage.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>		
</body>
</html>