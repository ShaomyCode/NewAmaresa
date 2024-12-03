	<?php
		include './Assets/Php/Connection.php';
		session_start();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AMARESA - Inquiries</title>
		<!-- CUSTOM CSS  -->
		<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>">
		<!-- WEBSITE ICON -->
		<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">	
		<!-- SWWET ALERT -->
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">		
	</head>
	<body>
		<nav class="sidebar close" id="sidebar">
			<header>
				<figure class="image-container">
					<img src="./Assets/Images/Amaresa-logo.png" alt="Amaresa Logo">
				</figure>
				<button class="toggle">
					<i class="fa-solid fa-angles-right"></i>
				</button>
			</header>

			<div class="menu-bar">
				<div class="menu">

					<ul class="menu-links">
						<li class="nav-link">
							<a href="./Admin-Account.php">  
								<i class="fa-solid fa-id-card-clip"></i>
								<span class="text nav-text">Dashboard</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Admin-Pending.php" class="active">
								<i class="fa-solid fa-chalkboard-user"></i>
								<span class="text nav-text">Inquiries</span>
							</a>
						</li>	

						<li class="nav-link">
							<a href="./Admin-Client.php">
								<i class="fa-solid fa-certificate"></i>
								<span class="text nav-text">Clients</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Admin-Users.php" class="dashboard-list-item">
								<i class="fa-solid fa-users"></i>
								<span class="text nav-text">Users</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Admin-Management.php" class="dashboard-list-item">
								<i class="fa-solid fa-user-tie"></i>
								<span class="text nav-text">Management</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Admin-Properties.php" class="dashboard-list-item">
								<i class="fa-solid fa-bars-progress"></i>
								<span class="text nav-text">Properties</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="Admin-Message.php" class="dashboard-list-item">
								<i class="fa-solid fa-envelope"></i>
								<span class="text nav-text">Messages</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Admin-Archieve.php" class="dashboard-list-item">
								<i class="fa-solid fa-box-archive"></i>
								<span class="text nav-text">Archieve</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="Admin-SoldProperties.php" class="dashboard-list-item">
								<i class="fa-solid fa-rectangle-list"></i>
								<span class="text nav-text">Sales Log</span>
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
		

		<main class="main">
		<!-- Main Section -->
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
							<th>Stage</th>
							<th>Ocular Visit</th>
							<th>Date</th>
							<th class="action-center">Actions</th>
						</tr>	
					<!-- GETTING THE DATAS FROM PENDING TO DISPLAY -->	
					<?php

						if(isset($_POST['Sort-btn'])){
							$Sortlist = $_POST['Sort-Option'];
							if($Sortlist == "Paid"){
								$sql = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID WHERE Category = 'Paid' ";
							}elseif($Sortlist == "Unpaid"){
								$sql = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID WHERE Category = 'Unpaid' ";
							}elseif($Sortlist == "Pending"){
								$sql = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID WHERE pending.Status = 'Pending' ";
							}elseif($Sortlist == "Verified"){
								$sql = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID WHERE pending.Status = 'Verified' ";
							}elseif($Sortlist == "Declined"){
								$sql = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID WHERE pending.Status = 'Declined' ";
							}else{
								$sql = "SELECT pending.*, properties.Property FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID ORDER BY Category DESC";
							}
						}else{
							$sql = "SELECT pending.*, properties.* FROM pending JOIN properties ON pending.PropertyID = properties.PropertyID ";
						}
							
							$rs = mysqli_query($conn, $sql);

							if($rs){
								while ($row = mysqli_fetch_assoc($rs)) {
									// code...
									$PendingID = $row['PendingID'];
									$Lastname = $row['Lastname'];
									$Firstname = $row['Firstname'];
									$Email = $row['Email'];
									$Phone = $row['Phone'];
									$Reservation = './Images/'.$row['Reservation'];
									$Selected_Property = $row['Property'];
									$Selected_Property_block = $row['Block'];
									$Stage = $row['Stage'];
									$ocular = $row['ocular'];
									$Date = $row['Date'];
									$Promote = "Stage 2";
									if(file_exists($Reservation)){
										$Reservation = "Document found";
									}else{
										$Reservation = "No Document found";
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
										<td>".$Stage."</td>
										<td>".$ocular."</td>
										<td>".$Date."</td>
										

										<td class='td-action'>
											<a href='./Admin-ViewPending.php?ViewID=".$PendingID."' class='custom-tooltip' data-title='View'>
												<i class='fa-solid fa-eye'></i>
											</a>											

											<a href='./Assets/Php/Admin.php?MoveClient=".$PendingID."&StagePromote=".$Promote."' class='custom-tooltip' data-title='Promote'>
												<i class='fa-solid fa-people-arrows'></i>
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
			
			<!-- FLOAT: FILTER -->
			<form method="POST"> 		
				<div class="float-diagram">
					<div class="form-items">
						<input type="search" list="Options" name="Sort-Option" placeholder="Find specific results...">
						<datalist id="Options">
						    <option value="Paid">
						    <option value="Unpaid">
						    <option value="Pending">
						    <option value="Verified">
						    <option value="Declined">
						    <option value="Default">
						</datalist>						
					</div>
					<button type="submit" name="Sort-btn" ><i class="fa-solid fa-sort"></i> Sort </button>
				</div>
			</form>	

		</main>


		<script src="./Assets/Js/Notification.js?v=<?php echo time(); ?>"></script>
		<!-- Fontawesome Link -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
		<!-- NO TURNING BACk -->
		<script language="javascript" type="text/javascript">	
	            window.history.forward();
		</script>		
		<!-- SWEET ALERT -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</body>
	</html>