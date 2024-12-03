<?php
	include './Assets/Php/Connection.php';
	session_start();
    $Firstname = $_SESSION['Firstname'];
    $Lastname = $_SESSION['Lastname'];
    $UserID = $_SESSION['UserID'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Overview</title>
	<!-- Link: Custom -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Profile_overview.css?v=<?php echo time(); ?>">
	<!-- LINK: FOR AMARESA FONT -->
	<link rel="stylesheet" type="text/css" href="./Assets/Momoiro-Regular/style.css">	
	<!-- Link: Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic\.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Link: Web Icon -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
</head>
<body>
	<header class="Profile_view_header">
		<h3 class="h3 header_title">Details Overview </h3>
		<a href="javascript:history.back()" class="header_link_back">
			<i class="fa-solid fa-arrow-right-to-bracket"></i>
			<span>Go back</span>
		</a>
	</header>	

	<main class="main">

		<?php

			if(isset($_GET['ViewID'])){
				$SelectedID = $_GET['ViewID'];
				$sql = "
				SELECT 
					pending.*,
					properties.*
				FROM
					pending
				LEFT JOIN properties ON properties.PropertyID = pending.PropertyID
				WHERE
					pendingID = $SelectedID
				";
				$Result = mysqli_query($conn, $sql);
				if($Result  && mysqli_num_rows($Result) > 0){
					while ($Row = mysqli_fetch_assoc($Result)) {
						$Selected_Property_Exterior = './Images/'.$Row['IExterior'];
						$Selected_Property_Name = $Row['Property'];
						$Selected_Property_block = $Row['Block'];
						$Selected_Property_Price = $Row['Price'];
						$Pending_Payment = $Row['Payment'];
						$Pending_Stage = $Row['Stage'];
						$Agent = "No Agent";
						// PICTURES
						$Pending_Gov_1 = './Images/'.$Row['GovermentID1'];
						$Pending_Gov_2 = './Images/'.$Row['GovermentID2'];
						$Pending_Billing = './Images/'.$Row['Billing'];
						$Pending_Income = './Images/'.$Row['Income'];
						$Pending_Reservation = './Images/'.$Row['Reservation'];
						$Balance = $Selected_Property_Price - $Pending_Payment;

						echo "

						<figure class='House_Interior'>
							<img src='$Selected_Property_Exterior' alt='House Interior'>
						</figure>
						<h3 class='h3 House_name'>$Selected_Property_Name</h3>

						<div class='House_Details'>
							<div class='House_location'>
								<div class='House_location_items'>
									<h4> Block </h4>
									<input type='text' readonly value='$Selected_Property_block'>
								</div>
								<div class='House_location_items'>
									<h4> Lot </h4>
									<input type='text' readonly value='$Selected_Property_block'>
								</div>
								<div class='House_location_items'>
									<h4> Phase </h4>
									<input type='text' readonly value='$Selected_Property_block'>
								</div>
							</div>							
							<div class='House_location'>
								<div class='House_location_items'>
									<h4> Asking Price </h4>
									<input type='text' readonly value='$Selected_Property_Price'>
								</div>
								<div class='House_location_items'>
									<h4> Reservation(Paid) </h4>
									<input type='text' readonly value='$Pending_Payment'>
								</div>
								<div class='House_location_items'>
									<h4> Remaining Balance </h4>
									<input type='text' readonly value='$Balance'>
								</div>
							</div>							

							<div class='House_location'>
								<div class='House_location_items'>
									<h4> Stage </h4>
									<input type='text' readonly value='$Pending_Stage'>
								</div>
								<div class='House_location_items'>
									<h4> Agent </h4>
									<input type='text' readonly value='$Agent'>
								</div>
							</div>
						</div>

						<form method='POST' enctype='multipart/form-data' action='./Assets/Php/Index.php' autocomplete='on'>
						<div class='Upload_Details'>
							<div class='Upload_Details_items'>
								<input type='hidden' name='SelectedID' value='$SelectedID'>
								<div class='Upload_items'>
									<img src='$Pending_Gov_1' alt='Goverment ID 1'>
									<div class='Proofs'>
										<label for='file-upload-goverment1' class='custom-file-upload'>Upload Gov's ID</label>
										<span id='show-text-goverment1' class='show-text'>Image shows here</span>
										<input id='file-upload-goverment1' type='file'  name='GovermentID_1' accept='image/*' >
									</div>									
								</div>

								<div class='Upload_items'>
									<img src='$Pending_Gov_2' alt='Goverment ID 2'>
									<div class='Proofs'>
										<label for='file-upload-goverment2' class='custom-file-upload'>Upload Gov's ID</label>
										<span id='show-text-goverment2' class='show-text'>Image shows here</span>
										<input id='file-upload-goverment2' type='file'  name='GovermentID_2' accept='image/*' >
									</div>									
								</div>

								<div class='Upload_items'>
									<img src='$Pending_Billing' alt='Proof of Billing'>
									<div class='Proofs'>
										<label for='file-upload-billing' class='custom-file-upload'>Upload Billing</label>
										<span id='show-text-billing' class='show-text'>Image shows here</span>
										<input id='file-upload-billing' type='file'  name='Billing' accept='image/*' >
									</div>									
								</div>

							</div>							

							<div class='Upload_Details_items'>

								<div class='Upload_items'>
									<img src='$Pending_Income' alt='Proof of Income'>
									<div class='Proofs'>
										<label for='file-upload-income' class='custom-file-upload'>Upload Income</label>
										<span id='show-text-income' class='show-text'>Image shows here</span>
										<input id='file-upload-income' type='file'  name='Income' accept='image/*' >
									</div>									
								</div>

								<div class='Upload_items'>
									<img src='$Pending_Reservation' alt='Proof of Reservation'>
									<div class='Proofs'>
										<label for='file-upload-reservation' class='custom-file-upload'>Upload Reservation</label>
										<span id='show-text-reservation' class='show-text'>Image shows here</span>
										<input id='file-upload-reservation' type='file'  name='Reservation' accept='image/*' >
									</div>									
								</div>

							</div>							
							<div class='Upload_Details_items'>

								<div class='Upload_items'>
									<input type='tel' name='Payment' placeholder='Enter your reservation'>
								</div>

								<div class='Upload_items'>
									<button type='submit' name='Update_Overview' class='btn'>
										<span>Update</span>
									</button>
								</div>

							</div>

						</div>
						</form>
					
						";
					}
				}else{
					echo "No Data Found";
				}
			}

		echo "

		<figure class='House_Interior'>

		</figure>

		";

		?>
	</main>
	<script src="./Assets/Js/Upload_Profile_Overview.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
</body>
</html>