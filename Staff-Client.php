	<?php
		include './Assets/Php/Connection.php';
		session_start();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AMARESA - Client</title>
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
							<a href="./Staff-Account.php">  
								<i class="fa-solid fa-id-card-clip"></i>
								<span class="text nav-text">Dashboard</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Staff-Pending.php">
								<i class="fa-solid fa-chalkboard-user"></i>
								<span class="text nav-text">Pendings</span>
							</a>
						</li>					
						<li class="nav-link">
							<a href="./Staff-Client.php"  class="active">
								<i class="fa-solid fa-certificate"></i>
								<span class="text nav-text">Clients</span>
							</a>
						</li>
						<li class="nav-link">
							<a href="./Staff-Users.php" class="dashboard-list-item">
								<i class="fa-solid fa-users"></i>
								<span class="text nav-text">Users</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Staff-Management.php" class="dashboard-list-item">
								<i class="fa-solid fa-user-tie"></i>
								<span class="text nav-text">Management</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Staff-Properties.php" class="dashboard-list-item">
								<i class="fa-solid fa-bars-progress"></i>
								<span class="text nav-text">Properties</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="Staff-Message.php" class="dashboard-list-item">
								<i class="fa-solid fa-envelope"></i>
								<span class="text nav-text">Messages</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Staff-Archieve.php" class="dashboard-list-item">
								<i class="fa-solid fa-box-archive"></i>
								<span class="text nav-text">Archieve</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="Staff-SoldProperties.php" class="dashboard-list-item">
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
							<th>Agent </th>
							<th>Stage</th>
							<th>Ocular Visit</th>
							<th>Date</th>

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