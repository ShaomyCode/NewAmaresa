<?php
	include './Assets/Php/Connection.php';
	session_start();

	if(isset($_SESSION['Firstname']) && isset($_SESSION['Lastname']) && isset($_SESSION['UserID'])){
		$Firstname = $_SESSION['Firstname'];
		$Lastname = $_SESSION['Lastname'];
		$UserID = $_SESSION['UserID'];        
	}else{
		header("location: ./index.php");

	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Account</title>
	<!-- Link: Custom css  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>">
	<!-- Link: Web icon -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
	<!-- Link: Swiper -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/swiper-bundle.min.css">
</head>
<body>
	<!-- Section: Sidebar -->
	<nav class="sidebar close" id="sidebar">
		<header>
			<figure class="image-container">
				<img src="./Assets/Images/amaresa-logo.PNG" alt="Amaresa Logo">
			</figure>
			<button class="toggle">
				<i class="fa-solid fa-angles-right"></i>
			</button>
		</header>

		<div class="menu-bar">
			<div class="menu">
				
				<ul class="menu-links">
					<li class="nav-link">
						<a href="./Agent-Account.php" class="dashboard-list-item active"  >  
							<i class="fa-solid fa-id-card-clip"></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>					
			

					<li class="nav-link">
						<a href="./Agent-Users.php" >
							<i class="fa-solid fa-users"></i>
							<span class="text nav-text">Inquiries</span>
						</a>
					</li>					
				

					<li class="nav-link">
						<a href="./Assets/Php/Logout.php" class="dashboard-list-item">
							<i class="fa-solid fa-right-from-bracket"></i>
							<span class="text nav-text">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Section: Main -->
	<main class="main">
	<!-- DASHBOARD: HEADER -->
	<header class="header" id="header">
		<div class="container">
			<div class="Personal-Details">
				<div class="Personal-Admin-Container">
					<h3 class="h3 Personal-Title"> WELCOME, </h3> 
					<span class="AdminName"><?php echo "$Firstname $Lastname $UserID" ?></span>
				</div>
				<span class="Personal-tag"> Admin </span>
				<span class="callouts">Manage Properties and Users. </span>
			</div>
		</div>
	</header>

			<section class="Table-section" id="Table-Section">
				<div class="container">
					<table class="table" id="table">
						<tr>	

							<th>#</th>
							<th>Lastname</th>
							<th>Firstname</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Property</th>
							<th>Reservation</th>
							<th>Agent </th>
							<th>Stage</th>
							<th>Ocular Visit</th>
							<th>Date</th>
							<th class="action-center">Actions</th>
						</tr>	
					<!-- GETTING THE DATAS FROM PENDING TO DISPLAY -->	
					<?php



							$sql = "
							SELECT 
								clients.*, 
								properties.*, 
								management.Lastname AS MEmail
							FROM 
								clients 
							LEFT JOIN 
								properties ON clients.PropertyID = properties.PropertyID							
							LEFT JOIN 
								management ON clients.managementID = management.managementID
							WHERE
								management.managementID = $UserID
							 ";
							
							$rs = mysqli_query($conn, $sql);

							if($rs){
								while ($row = mysqli_fetch_assoc($rs)) {
									// code...
									$PendingID = $row['ClientID'];
									$Lastname = $row['lastname'];
									$Firstname = $row['Firstname'];
									$Email = $row['email'];
									$Phone = $row['phone'];
									$Reservation = './Images/'.$row['Reservation'];
									$Selected_Property = $row['Property'];
									$Selected_Property_block = $row['Block'];
									$Stage = $row['Stages'];
									$ocular = $row['ocular'];
									$ManagementID = $row['MEmail'] ?? "No Agent";
									$Date = $row['Date'];

									if(file_exists($Reservation)){
										$Reservation = $row['Payment'];
									}else{
										$Reservation = "No Reservation";
									}
									echo "

									<tr>

										<td>".$PendingID."</td>
										<td>".$Lastname."</td>
										<td>".$Firstname."</td>
										<td>".$Email."</td>
										<td>".$Phone."</td>
										<td>".$Selected_Property."</td>
										<td>".$Reservation."</td>
										<td>".$ManagementID."</td>
										<td>".$Stage."</td>
										<td>".$ocular."</td>
										<td>".$Date."</td>
										

										<td class='td-action'>
											<a href='./Agent-View-Client.php?ViewID=".$PendingID."' class='custom-tooltip' data-title='View'>
												<i class='fa-solid fa-eye'></i>
											</a>
											

											<a href='./Assets/Php/Admin.php?CommissionID=".$PendingID."' class='custom-tooltip confirm-pending' data-title='Message'>
												<i class='fa-sharp fa-solid fa-message'></i> 
											</a>

										</td>
									</tr>

									
									";
								}
								echo " </table>";
							
							}
							
						?>


					
				</div>	
			</section>

	</main>
	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/Swiper.js?v=<?php echo time(); ?>"></script>
	<!-- JS: Swiper -->
	<script type="text/javascript" src="./Assets/Js/swiper-bundle.min.js"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
	<!-- NO TURNING BACk -->
	<script language="javascript" type="text/javascript">	
            window.history.forward();
	</script>
	
</body>
</html>