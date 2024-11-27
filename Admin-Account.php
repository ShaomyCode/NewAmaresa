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
						<a href="./Admin-Account.php" class="active">  
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
	<!-- Section: Main -->
	<main class="main">


	<!-- DASHBOARD: HEADER -->
	<header class="header" id="header">
		<div class="container">
			<div class="Personal-Details">
				<div class="Personal-Admin-Container">
					<h3 class="h3 Personal-Title"> WELCOME, </h3> 
					<span class="AdminName"><?php echo "$Firstname $Lastname" ?></span>
				</div>
				<span class="Personal-tag"> Admin </span>
				<span class="callouts">Manage Properties and Users. </span>
			</div>
		</div>
	</header>

		<section class="Main-Container">
			<div class="Left-main-container">
				<div class="recent-activity-container">
					 <h3 class="header-title">Recent Activities</h3>
					<div class="item-wrapper">
						<div class="items">
							<h3 class="content-title">
								Property Listed
							</h3>
							<?php 
							$sql = "SELECT COUNT(*) AS total FROM properties";
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
							$sql = "SELECT COUNT(*) AS total FROM user";
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
							$sql = "SELECT COUNT(*) AS total FROM pending";
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
							$sql = "SELECT COUNT(*) AS total FROM archive";
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
				</div>
				<div class="Testimonial-container">
					<div class="Testimonials-table-container">
							<table class="table" id="table">
						<thead>
							<tr>
								<th> Fullname</th>
								<th> Message</th>
								<th> Rate </th>
								<th> Date </th>
							</tr>
						</thead>
						<tbody>
							<?php

								$sql = "SELECT * FROM message ORDER BY Rate DESC";
								$rs = $conn->query($sql);
								if($rs){
									while ($row = mysqli_fetch_assoc($rs)) {
									$rating = $row['Rate'];
								
								echo "
									<tr>
										<td> $row[Sender]</td>
										<td> $row[Message]</td>
										<td> $rating</td>
										<td> $row[Date] </td>
							
									</tr>								
								";
							
									}
								}


							?>
						</tbody>
					</table>
					</div>
				</div>
			</div>

			<div class="Right-main-container">
				<div class="Testimonial" id="Testimonial">
					<div class="container">
						<h3 class="h3 Testimonial-title"> Preview </h3>
						<div class="Testimonial-Container">
							<div class="Testimonial-swiper mySwiper">
								<div class="Testimonial-wrapper swiper-wrapper">
									<?php
									$sql = "SELECT * FROM message";
									$rs = $conn->query($sql);
									if($rs){
										while ($row = mysqli_fetch_assoc($rs)) {
											$rating = $row['Rate'];
											echo "
											<div class='Testimonial-card swiper-slide'>
												<h3 class='Testimonial-user'> $row[Sender] </h3>
												<div class='star-rating'>";
												for ($i = 5; $i >= 1; $i--) { 
													echo "
													<input type='radio' id='star$i'  value='$i' " . ($i == $rating ? "checked" : "") . "> 
													<label for='star$i' title='Rating: $i'>★</label>
													"; 
												}
											echo "</div> <span>$row[Message]</span> </div>";
										}			
									}
									?>
								</div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
				<section class="ActiveLog" id="ActiveLog">
					<div class="container">
						<div class="ActiveLog-table-container">
							<table class="table">
							<thead>
								<tr>
									<th> Lastname</th>
									<th> Status</th>
									<th> Last Log </th>

								</tr>
							</thead>								
								<?php

									$sql = "SELECT activitylog.*, user.Lastname FROM activitylog JOIN user ON activitylog.UserID = user.UserID ORDER BY Logintime DESC ";
									$rs = mysqli_query($conn,$sql);
									if($rs){
										while($row=mysqli_fetch_assoc($rs)){

											$lastname = $row['Lastname'];
											$Action = $row['Action'];
											$LoginTime = $row['Logintime'];

											echo "
											<tbody>
											<tr>
											<td> $lastname</td>
											<td> $Action</td>
											<td> $LoginTime </td>
											</tr>							
											</tbody>
											";
										}
									}


							?>
						</table>
						</div>
					</div>
				</section>
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