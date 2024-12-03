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
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">	
	  <!-- Include SweetAlert2 CSS and JS -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
				<a href="./Staff-Pending.php" class="btn"> 
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
						$stmt = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID= properties.PropertyID WHERE PendingID = $SelectedID ";
						$rs = mysqli_query($conn,$stmt);
						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								$Lastname = $row['Lastname'];
								$Firstname = $row['Firstname'];
								$Email = $row['Email'];
								$Status = $row['Status'];
								$Phone = $row['Phone'];
								$Message = $row['Message'];
								$Address = $row['Address'];
								$Selected = $row['Property'];
								$Category = $row['Category'];
								$Receipt = "./Images/".$row['Receipt'];
								$Date = $row['Date'];

								echo " 

								<div class='Viewing-wrapper'>
									<div class='View-details'>
										<h3 class='h3 View-title'>Overview of $Lastname details</h3>
										<span>A Summary of Important Details</span>
										<div class='View-details-items'>
											<input type='text' value='$Lastname' readonly>
											<input type='text' value='$Firstname' readonly>
										</div>										

										<div class='View-details-items'>
											<input type='text' value='$Email' readonly>
											<input type='text' value='$Phone' readonly>
										</div>

										<div class='View-details-items'>
											<input type='text' value='$Address' readonly>
											<input type='text' value='$Selected' readonly>
										</div>		

										<div class='View-details-items'>
											<input type='text' value='$Category' readonly>
											<input type='text' placeholder='Category here...' value='$Status' readonly>
										</div>
										<div class='View-details-items'>
											<input type='text' value='$Date' readonly>
										</div>
										<div class='View-details-items'>
											<textarea placeholder='User Message here...' readonly>$Message</textarea>
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
		<!-- SWEET ALERT -->
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>	
	</body>
	</html>