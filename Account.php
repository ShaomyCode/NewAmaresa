<?php
	include './Assets/Php/Connection.php';
	session_start();
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
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">
	<!-- Link: Swiper -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/swiper-bundle.min.css">
</head>
<body>
	<!-- Section: Sidebar -->
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
						<a href="./Account.php" class="active">  
							<i class="fa-solid fa-id-card-clip"></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Pending.php">
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
	<!-- Section: Main -->
	<main class="main">


	<!-- DASHBOARD: HEADER -->
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
		</div>
	</header>

		<div class="Left-main-container">
			<div class="recent-activity-container">
				 <h3 class="header-title">Recent Activities</h3>
				<div class="item-wrapper">
					<div class="items">
						<h3 class="content-title">
							Property Listed
						</h3>
						<?php 
						$sql = "SELECT COUNT(*) AS total FROM Properties";
						$result = $conn->query($sql);
						$total = 0;
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							$total = $row['total'];
						}
						echo "<span> ".$total." </span>";
						?>
					</div>

					<div class="items">
						<h3 class="content-title">User Registered</h3>
						<?php 
						$sql = "SELECT COUNT(*) AS total FROM User";
						$result = $conn->query($sql);
						$total = 0;
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							$total = $row['total'];
						}
						echo "<span> ".$total." </span>";
						?>
					</div>

					<div class="items">
						<h3 class="content-title">
							Pending Logs
						</h3>
						<?php 
						$sql = "SELECT COUNT(*) AS total FROM Pending";
						$result = $conn->query($sql);
						$total = 0;
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							$total = $row['total'];
						}
						echo "<span> ".$total." </span>";
						?>
					</div>

						<div class="items">
						<h3 class="content-title">
							Archive Logs
						</h3>
						<?php 
						$sql = "SELECT COUNT(*) AS total FROM Archive";
						$result = $conn->query($sql);
						$total = 0;
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							$total = $row['total'];
						}
						echo "<span> ".$total." </span>";
						?>
					</div>

				</div>

			</div >
		</div>
	


		
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
            // window.history.forward();
	</script>
	



</body>
</html>