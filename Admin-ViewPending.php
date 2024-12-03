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
	<link rel="stylesheet" type="text/css" href="./Assets/Css/View_pending.css?v=<?php echo time(); ?>"> 
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>"> 
	<!-- LINK: FOR AMARESA FONT -->
	<link rel="stylesheet" type="text/css" href="./Assets/Momoiro-Regular/style.css">	
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
				<a href="./Admin-Pending.php" class="btn"> 
					<i class="fa-solid fa-right-from-bracket"></i>
					<span> Go back </span>
				</a>
			</div>
		</div>
	</header>

	<main>
		<?php
			if(isset($_GET['ViewID'])){
				$SelectedID = $_GET['ViewID'];
				$stmt = "SELECT pending.*, properties.* FROM pending JOIN properties ON pending.PropertyID= properties.PropertyID WHERE PendingID = $SelectedID ";
				$rs = mysqli_query($conn,$stmt);
				if($rs){
					while ($row = mysqli_fetch_assoc($rs)) {
						$UserID = $row['UserID'];
						$PendingID = $row['PendingID'];
						$Promote = "Stage 2";
						$Lastname = $row['Lastname'];
						$Firstname = $row['Firstname'];
						$Email = $row['Email'];
						$Phone = $row['Phone'];
						$Message = $row['Message'];
						$Address = $row['Address'];
						$Date = $row['Date'];
						$ocular = $row['ocular'];
						$Stage = $row['Stage'];
						$Payment = $row['Payment'];
						$GovermentID1 = "./Images/".$row['GovermentID1'];
						$GovermentID2 = "./Images/".$row['GovermentID2'];
						$Billing = "./Images/".$row['Billing'];
						$Income = "./Images/".$row['Income'];
						$Reservation = "./Images/".$row['Reservation'];

						// PROPERTY
						$Property = $row['Property'];
						$PropertyID = $row['PropertyID'];
						$Block = $row['Block'];

						echo " 
							<form  method='POST' enctype='multipart/form-data' action='./Assets/Php/Admin.php' autocomplete='on'>
							<div class='Pending_view_wrapper'>
								<div class='Pending_view_details'>
									<h3 class='Pending_title'> Overview of Jamandron details </h3>
									<span> A Summary of Important Details </span>
									<div class='Pending_view_details_items'>
										<div class='Pending_items'>
											<label for='input' class='text'> Firstname: </label>
											<input type='text' value='$Firstname' name='Firstname' readonly>
										</div>
										<div class='Pending_items'>
											<label for='input' class='text'> Lastname: </label>
											<input type='text' value='$Lastname' name='Lastname'  readonly>
										</div>
									</div>										

									<div class='Pending_view_details_items'>
										<div class='Pending_items'>
											<label for='input' class='text'> Email: </label>
											<input type='text' value='$Email' name='Email' readonly>
										</div>
										<div class='Pending_items'>
											<label for='input' class='text'> Phone: </label>
											<input type='text' value='$Phone' name='Phone' readonly>
										</div>
									</div>	

									<div class='Pending_view_details_items'>
										<div class='Pending_items'>
											<label for='input' class='text'> Address: </label>
											<input type='text' value='$Address' name='Address' readonly>
										</div>										

										<div class='Pending_items'>
											<label for='input' class='text'> Ocular visit: </label>
											<input type='text' value='$ocular' name='Ocular' placeholder='ocular Visit' readonly>
										</div>
									</div>									


									<div class='Pending_view_details_items'>
										<div class='Pending_items'>
											<label for='input' class='text'> Property: </label>
											<input type='text' value='$Property' readonly>
											<input type='hidden' value='$PropertyID' name='PropertyID' readonly>
										</div>
										<div class='Pending_items'>
											<label for='input' class='text'> Block: </label>
											<input type='text' value='$Block' readonly>
										</div>
									</div>										

									<div class='Pending_view_details_items'>
										<div class='Pending_items'>
											<label for='input' class='text'> Level: </label>
											<input type='text' value='$Stage' readonly>
										</div>
										<div class='Pending_items'>
											<label for='input' class='text'> Date: </label>
											<input type='text' value='$Date' readonly>
										</div>
									</div>	
									<div class='Pending_view_details_items'>
										<div class='Pending_items'>
											<label for='input' class='text'> Message: </label>
											<textarea rows='5'  >$Message</textarea>
										</div>
									</div>	
									<div class='Pending_view_details_items'>

											<a href='./Assets/Php/Admin.php?MoveClient=".$PendingID."&StagePromote=".$Promote."' class='custom-tooltip' data-title='Promote'>
												<i class='fa-solid fa-people-arrows'></i>
												<span>Confirm client </span>
											</a>									
									</div>
								</div>

								<div class='Pending_view_reservation'>
									<h3 class='Pending_title'> Reservation details</h3>
									<div class='Pending_items_reservation'>
										<img src='$GovermentID1'  alt='Goverment ID'>
										<img src='$GovermentID2' alt='Goverment ID'>
									</div>									

									<div class='Pending_items_reservation'>
										<img src='$Billing' alt='Proof of Billing'>
										<img src='$Income' alt='Proof of Income'>
									</div>
									<div class='Pending_items_reservation'>
										<img src='$Reservation' alt='Proof of  Reservation'>
										<input type='hidden' name='Payment' value='$Payment'>
									</div>
								</div>
							</div>
						";


					}
				}
			}
		?>
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