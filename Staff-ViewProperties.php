<?php
include './Assets/Php/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - View Property</title>
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
				<a href="./Staff-Properties.php" class="btn"> 
					<i class="fa-solid fa-right-from-bracket"></i>
					<span> Go back </span>
				</a>
			</div>
		</div>
	</header>

	<main>

		<section class="Content">
			<div class="container">
				<?php

				if(isset($_GET['ViewID'])){
					$SelectedID = $_GET['ViewID'];

					$SelectedSQL = "SELECT * FROM properties WHERE PropertyID = $SelectedID";
					$SelectedRS = mysqli_query($conn,$SelectedSQL);
					if($SelectedRS){
						while ($SelectedRow = mysqli_fetch_assoc($SelectedRS)) {
							$Property = $SelectedRow['Property'];
							$Price = $SelectedRow['Price'];
							$Bedrooms = $SelectedRow['Bedrooms'];
							$Bathrooms = $SelectedRow['Bathrooms'];
							$Area = $SelectedRow['Area_sqft'];
							$Date = $SelectedRow['Calendar'];
							$Description = $SelectedRow['Description'];

							$ImageExterior = './Images/'.$SelectedRow['IExterior'];
							$ImageHighlight1 = './Images/'.$SelectedRow['IBathroom'];
							$ImageHighlight2 = './Images/'.$SelectedRow['IBedroom'];
							$ImageHighlight3 = './Images/'.$SelectedRow['IAttic'];
							$ImageHighlight4 = './Images/'.$SelectedRow['IDining'];

							echo " 

							<div class ='View-Content'>

							<div class='Property-details'>
							<span class='Property-tag'> Viewing </span>
							<div class='Property-detail-items'>
							<input type='text' value='$Property'  readonly>
							<input type='text' value='$Price'  readonly>
							</div>										

							<div class='Property-detail-items'>
							<input type='text' value='$Bedrooms'  readonly>
							<input type='text' value='$Bathrooms'  readonly>
							</div>

							<div class='Property-detail-items'>
							<input type='text' value='$Area'  readonly>
							<input type='text' value='$Date'  readonly>
							</div>

							<div class='Property-detail-items'>
							<textarea readonly>$Description</textarea>
							</div>

							</div>

							<div class='Property-Images'>
							<div class='Property-image-exterior'>
							<img src='$ImageExterior' alt='Exterior'>
							</div>
							<div class='Property-image-highlights'>
							<img src='$ImageHighlight1' alt='Highlight 1'>
							<img src='$ImageHighlight2' alt='Highlight 2'>
							<img src='$ImageHighlight3' alt='Highlight 3'>
							<img src='$ImageHighlight4' alt='Highlight 4'>
							</div>
							</div>

							</div>

							";

						}
					}
				}
				?>
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