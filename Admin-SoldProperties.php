<?php

	include './Assets/Php/Connection.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Solds</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
</head>
<body>

	<!-- SIDEBAR -->
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
						<a href="./Admin-Account.php" >  
							<i class="fa-solid fa-id-card-clip"></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Admin-Pending.php">
							<i class="fa-solid fa-chalkboard-user"></i>
							<span class="text nav-text">Pendings</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Admin-Users.php" class="dashboard-list-item " >
							<i class="fa-solid fa-users"></i>
							<span class="text nav-text">Users</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Admin-Management.php" class="dashboard-list-item ">
							<i class="fa-solid fa-user-tie"></i>
							<span class="text nav-text">Management</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Admin-Properties.php" class="dashboard-list-item ">
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
						<a href="./Admin-Archieve.php" class="dashboard-list-item ">
							<i class="fa-solid fa-box-archive"></i>
							<span class="text nav-text">Archieve</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="Admin-SoldProperties.php" class="dashboard-list-item active">
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
	<!-- PROPERTIES Section -->
		<section class="Table-section" id="Table-Section">
			<div class="container">

				<table class="table" id="table">
					<tr>	
						<th>Property</th>
						<th>Current Owner</th>
						<th>Previous Owner</th>
						<th>Date Purchased</th>
						<th>Transaction Date</th>

						<th class="action-center">Actions</th>
					</tr>	
					<?php

						$sql = "SELECT * FROM sales";
						$rs = mysqli_query($conn, $sql);

						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								// code...
								$SaleID = $row['SaleID'];
								$Property = $row['Property'];
								$Owner = $row['CurrentOwner'];
								$Previous = $row['PreviousOwner'];
								$Date_Purchased = $row['Date_Purchased'];
								$Transaction = $row['TransactionDate'];
							

								echo "

								<tr>
									<td>".$Property."</td>
									<td>".$Owner."</td>
									<td>".$Previous."</td>
									<td>".$Date_Purchased."</td>
									<td>".$Transaction."</td>
								
								

							<td class='td-action'>
							<a href='Admin-ViewSales.php?UpdateID=$SaleID' class='custom-tooltip' data-title='Update'>
							<i class='fa-solid fa-file-pen'></i>
							</a>
							</td>
						

								</tr>

								";
							}
						}
					?>


				</table>
			</div>	
		</section>
	</main>
	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
		<!-- NO TURNING BACk -->
		<script language="javascript" type="text/javascript">	
	            window.history.forward();
		</script>			
</body>
</html>