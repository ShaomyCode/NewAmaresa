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
	<title>AMARESA - Profile</title>
	<!-- Custom Css Link -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Profile.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	<!-- LINK: FOR AMARESA FONT -->
	<link rel="stylesheet" type="text/css" href="./Assets/Momoiro-Regular/style.css">	
	<!-- Google font link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!-- Script: JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
  <!-- Include SweetAlert2 CSS and JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">	
</head>
<body>
	<header class="header-profile">
			<div class="header-top"> 
				<div class="container">
					<ul class="header-top-list">

						<li>
							<a href="https://www.amaresa.ph/" class="header-top-link">
								<i class="fa-solid fa-paper-plane"></i>
								<span>amaresa.ph</span>
							</a>
						</li>						

						<li> 
							<a href="https://www.google.com/maps/dir//Amaresa+Marilao,+3019+M.+Villarica+Rd,+Marilao,+3019+Bulacan/@14.7950949,121.0162162,17z/data=!4m17!1m7!3m6!1s0x3397b38da5906293:0x8b01e358c47a7685!2sAmaresa+Marilao!8m2!3d14.7950897!4d121.0187911!16s%2Fg%2F11gpnfmdlb!4m8!1m0!1m5!1m1!1s0x3397b38da5906293:0x8b01e358c47a7685!2m2!1d121.0188034!2d14.7951434!3e2?entry=ttu"  class="header-top-link">
								<i class="fa-solid fa-map-location-dot"></i>
								<span>3019 M. Villarica Rd, Marilao, 3019 Bulacan</span>
							</a>
						</li>
					</ul>
					<div class="wrapper">

						<ul class="header-top-social-list">
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-x-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</li>																							
						</ul>

						<a class="header-top-btn"  href="./Login.php"> 
							<i class="fa-solid fa-house"></i>
							<span> Home </span>
						</a>


						<div class="header-user-display">
							<i class="fa-solid fa-user-tie"></i> 
							<?php
							
							echo $Firstname, " " .$Lastname;

							?>
						</div>
					</div>
				</div>

			</div>
	</header>
	<main>
		<?php

			if(isset($_GET['EditID'])){
				$UserID = $_GET['EditID'];
				// View details and update
				$sql = "SELECT * FROM user WHERE UserID = $UserID";
				$rs = mysqli_query($conn,$sql);
				if($rs){
					while($row = mysqli_fetch_assoc($rs)){
						$fname = $row['Firstname'];
						$UserID = $row['UserID'];
						$lname = $row['Lastname'];
						$Email = $row['Email'];
						$Phone = $row['Phone'];
						$Address = $row['Address'];
						$Password = $row['Password'];
					echo "
						<form action='./Assets/Php/Index.php' method='POST' autocomplete='on'>
						<section class='Profile'>
							<div class='Profile_information'>
								<h3 class='h3 Profile_title'> PRESENT INFORMATION </h3>
								<span> Presenting the most recent insights... </span> 
								
								<div class='Profile_information_table'>

									<div class='Profile_information_table_items'>
										<div class='Information_items'>
											<input type='text' value='$fname' class='Information_display' readonly>
											<input type='hidden' value='$UserID' name='Update_UserID' class='Information_display' readonly>
											<input type='text' name='Update_Firstname' placeholder='Update firstname' class='Information_edit'>
										</div>										

										<div class='Information_items'>
											<input type='text' value='$lname' class='Information_display' readonly>
											<input type='text' name='Update_Lastname' placeholder='Update lastname' class='Information_edit'>
										</div>
									</div>									

									<div class='Profile_information_table_items'>
										<div class='Information_items'>
											<input type='text' value='$Email' class='Information_display' readonly>
											<input type='email' name='Update_Email' placeholder='Update email' class='Information_edit'>
										</div>										

										<div class='Information_items'>
											<input type='text' value='$Phone' class='Information_display' readonly>
											<input type='text' name='Update_Phone' placeholder='Update phone' class='Information_edit'>
										</div>
									</div>

									<div class='Profile_information_table_items'>
										<div class='Information_items'>
											<input type='text' value='$Address' class='Information_display' readonly>
											<input type='text' name='Update_Address' placeholder='Update address' class='Information_edit'>
										</div>										

										<div class='Information_items'>
											<input type='text' value='$Password' class='Information_display' readonly>
											<input type='password' name='Update_Password' placeholder='Update password' class='Information_edit'>
										</div>
									</div>

									<div class='Profile_information_table_items'>
										<button type='submit' name='Profile_Edit_update' class='btn'>
											<span>Update</span>
										</button>
									</div>
								</div>
							</div>
						</section>
						</form>
					";		
					
					}
				}

				// For viewing inquiry and agent
				$PendingTable = "
					 SELECT 
					 	pending.*, 
					 	user.*, 
					 	properties.* 
	       			 FROM 
	       			 	pending
	       			 JOIN 
	       			 	user ON pending.UserID = user.UserID
	        		 JOIN 
	        		 	properties ON pending.PropertyID = properties.PropertyID
	        		 WHERE 
	        		 	pending.UserID = $UserID
       			";
       				echo "
       					<div class='Inquiry_container'>
       						<table class='Table_Inquiry'>
       						<caption> Inquiry - No requirements </caption>
       						<thead>
       							<tr>
									<th>Property</th>
									<th>Block</th>
									<th>Lot</th>
									<th>Phase</th>
									<th>Stage</th>
									<th>Agent</th>
									<th>Payment</th>
									<th>Reservation</th>

									<th>Actions</th>       							
       							</tr>
       						</thead>
       				";       			
       			$Result_pending = mysqli_query($conn, $PendingTable);
       			if($Result_pending && mysqli_num_rows($Result_pending) > 0){

       				while($rw = mysqli_fetch_assoc($Result_pending)){
						// PROPERTY
						$Property = $rw['Property'];
						$PendingID = $rw['PendingID'];
						$Block = $rw['Block'];
						$Lot = $rw['Lot'];
						$Phase = $rw['Phase'];
						$Payment = $rw['Payment'];
						$Reservation = './Images/'.$rw['Reservation'];
						$Agent = $rw['Agent'] ?? "No Agent yet";
						// CLIENT
						$Stage = $rw['Stage'];
						if(file_exists($Reservation)){
							$Reservation = "Document found!";
						}else{
							$Reservation = "No Document found";
						}
						echo "
							<tbody>
								<tr>
									<td>$Property</td>
									<td>$Block</td>
									<td>$Lot</td>
									<td>$Phase</td>
									<td>$Stage</td>
									<td>$Agent</td>
									<td>$Payment</td>
									<td>$Reservation</td>
									<td class='td-action'>
										<a href='./Profile_overview.php?ViewID=".$PendingID."' class='custom-tooltip' data-title='View'>
											<i class='fa-solid fa-address-book'></i>										
										</a>
									</td>
								</tr>
							</tbody>
						";
       				}
	       				echo "
	       						</table>
	       					</div>
	       				";       				
       			}else{
       					echo "
       						<tr>
       							<td colspan='9'> No Data found </td>
       						</tr>
	       						</table>
	       					</div>
	       				";  
       			}

				// For viewing inquiry and agent  
				$AgentTable = "
					 SELECT 
					 	management.Lastname AS MLastname, 
					 	management.email AS MEmail, 
					 	management.Phone AS MPhone,
					 	clients.* , 
					 	properties.* 
	       			 FROM 
	       			 	clients
	       			 LEFT JOIN 
	       			 	management ON management.managementID = clients.managementID
	        		 LEFT JOIN 
	        		 	properties ON properties.PropertyID = clients.PropertyID
	        		 WHERE 
	        		 	clients.UserID = $UserID
       			";
       			       				echo "
       					<div class='Inquiry_container'>
       						<table class='Table_Inquiry'>
       						<caption> Inquiry - with requirements</caption>
       						<thead>
       							<tr>
									<th>Agent</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Property</th>
									<th>Block</th>
									<th>Lot</th>
									<th>Phase</th>
									<th>Stage</th>
									<th>Actions</th>       							
       							</tr>
       						</thead>
       				";
       			$Result_Agent = mysqli_query($conn, $AgentTable);
       			if($Result_Agent  && mysqli_num_rows($Result_Agent) > 0){

       				while($rw = mysqli_fetch_assoc($Result_Agent)){
						// AGENT 
						$AgentID = $rw['ClientID'];
						$MLastname = $rw['MLastname'] ?? "No agent";
						$MEmail = $rw['MEmail'] ?? "No agent";
						$MPhone = $rw['MPhone'] ?? "No agent";
						// PROPERTY
						$Property = $rw['Property'];
						$Block = $rw['Block'];
						$Lot = $rw['Lot'];
						$Phase = $rw['Phase'];
						// $ocular = isset($_POST['ocular']) ? $_POST['ocular'] : "No visit";
						// CLIENT
						$Stage = $rw['Stages'];

						echo "
							<tbody>
								<tr>
									<td>$MLastname</td>
									<td>$MEmail</td>
									<td>$MPhone</td>
									<td>$Property</td>
									<td>$Block</td>
									<td>$Lot</td>
									<td>$Phase</td>
									<td>$Stage</td>
								<td class='td-action'>
								    <a href='https://mail.google.com/mail/?view=cm&fs=1&to=$MEmail' class='custom-tooltip' data-title='MEmail' target='_blank'>
								        <i class='fa-solid fa-message'></i>
								    </a>
								</td>

								</tr>
							</tbody>
						";
       				}

						echo "
	       						</table>
	       					</div>
       				";	       				
       			}else{
       					echo "
       						<tr>
       							<td colspan='9'> No Data found </td>
       						</tr>
	       						</table>
	       					</div>
	       				";  
       			}
       					     				

			}
		?>

	</main>
	
	
			<!-- Script: Custom -->
		<script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Swiper.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Notification.js?v=<?php echo time(); ?>"></script>
		<!-- JS: Swiper -->
		<script type="text/javascript" src="./Assets/Js/swiper-bundle.min.js"></script> 	
		<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
		<!-- Script: Fontawesome -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
		 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>