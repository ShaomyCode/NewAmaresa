	<?php

		include './Assets/Php/Connection.php';
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AMARESA - Pendings</title>
		<!-- CUSTOM CSS  -->
		<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>">
		<!-- WEBSITE ICON -->
		<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
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
							<a href="./Account.php">  
								<i class="fa-solid fa-id-card-clip"></i>
								<span class="text nav-text">Dashboard</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Pending.php" class="active">
								<i class="fa-solid fa-chalkboard-user"></i>
								<span class="text nav-text">Pendings</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Users.php" class="dashboard-list-item">
								<i class="fa-solid fa-users"></i>
								<span class="text nav-text">Users</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Management.php" class="dashboard-list-item">
								<i class="fa-solid fa-user-tie"></i>
								<span class="text nav-text">Management</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Properties.php" class="dashboard-list-item">
								<i class="fa-solid fa-bars-progress"></i>
								<span class="text nav-text">Properties</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="Message.php" class="dashboard-list-item">
								<i class="fa-solid fa-envelope"></i>
								<span class="text nav-text">Messages</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="./Archieve.php" class="dashboard-list-item">
								<i class="fa-solid fa-box-archive"></i>
								<span class="text nav-text">Archieve</span>
							</a>
						</li>					

						<li class="nav-link">
							<a href="SoldProperties.php" class="dashboard-list-item">
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

							<th>Lastname</th>
							<th>Firstname</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Category</th>
							<th>Receipt</th>
							<th>Property</th>
							<th>Notes</th>
							<th>Date</th>
							<th class="action-center">Actions</th>
						</tr>	
					<!-- GETTING THE DATAS FROM PENDING TO DISPLAY -->	
					<?php

						if(isset($_POST['Sort-btn'])){
							$Sortlist = $_POST['Sort-Option'];
							if($Sortlist == "Paid"){
								$sql = "SELECT * FROM Pending WHERE Category = 'Paid' ";
							}elseif($Sortlist == "Unpaid"){
								$sql = "SELECT * FROM Pending WHERE Category = 'Unpaid' ";
							}elseif($Sortlist == "Testimonial"){
								$sql = "SELECT * FROM Pending WHERE Category = 'Testimonial' ";
							}else{
								$sql = "SELECT * FROM Pending ORDER BY Category ASC";
							}
						}else{
							$sql = "SELECT * FROM Pending";;
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
									$Selected_Property = $row['Selected_Property'];
									$Message = $row['Message'];
									$Category = $row['Category'];
									$Receipt = $row['Receipt'];
									
									$Image = 'Images/'.$row['Receipt'];
									$Date = $row['Date'];


									echo "

									<tr>

										<td>".$Lastname."</td>
										<td>".$Firstname."</td>
										<td>".$Email."</td>
										<td>".$Phone."</td>
										<td>".$Category."</td>
										<td>".$Receipt."</td>
										<td>".$Selected_Property."</td>
										<td class='note'>".$Message."</td>
										<td>".$Date."</td>
										

										<td class='td-action'>
											<a href=''><i class='fa-solid fa-money-check-dollar'></i></a>
											<a href='#'><i class='fa-solid fa-user-check'></i> </a>
											<a href='./Assets/Php/Admin.php?archiveID=".$PendingID."&value=Pending' onclick='return archiveConfirmation()' '>
											<i class='fa-solid fa-box-archive' ></i>
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
						    <option value="Testimonial">
						    <option value="Default">
						</datalist>						
					</div>
					<button type="submit" name="Sort-btn" ><i class="fa-solid fa-sort"></i> Sort </button>
				</div>
			</form>	

		</main>

		<!-- Custom JS & JQUERY -->
		<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
		<!-- Fontawesome Link -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
	</body>
	</html>