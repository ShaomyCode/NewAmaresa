<?php
	include './Assets/Php/Connection.php';
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
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
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
				<a href="./Pending.php" class="btn"> 
					<i class="fa-solid fa-right-from-bracket"></i>
					<span> Go back </span>
				</a>
			</div>
		</div>
	</header>

	<main>
		<section class="Content" id="Content">
			<div class="container">
				<?php

					if(isset($_GET['ViewID'])){

						$SelectedID = $_GET['ViewID'];

						$stmt = "SELECT * FROM Pending WHERE PendingID = $SelectedID ";
						$rs = mysqli_query($conn,$stmt);
						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								$Lastname = $row['Lastname'];
								$Firstname = $row['Firstname'];
								$Email = $row['Email'];
								$Phone = $row['Phone'];
								$Message = $row['Message'];
								$Address = $row['Address'];
								$Selected = $row['Selected_Property'];
								$Category = $row['Category'];
								$Receipt = "./Images/".$row['Receipt'];
								$Date = $row['Date'];

								echo " 

								<div class='Viewing-wrapper'>
									<div class='View-details'>
										<h3 class='h3 View-title'>Overview of $Lastname details</h3>
										<span>A Summary of Important Details</span>
										<div class='View-details-items'>
											<input type='text' value='$Lastname' disabled>
											<input type='text' value='$Firstname' disabled>
										</div>										

										<div class='View-details-items'>
											<input type='text' value='$Email' disabled>
											<input type='text' value='$Phone' disabled>
										</div>

										<div class='View-details-items'>
											<input type='text' value='$Address' disabled>
											<input type='text' value='$Selected' disabled>
										</div>		

										<div class='View-details-items'>
											<input type='text' value='$Category' disabled>
											<input type='text' value='$Date' disabled>
										</div>

										<div class='View-details-items'>
											<textarea>$Message</textarea>
										</div>
									</div>
									<div class='View-images'>
										<img src='$Receipt' alt='No Reservation fee'>
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