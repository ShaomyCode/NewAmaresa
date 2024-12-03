<?php

	include './Assets/Php/Connection.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Views</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>"> 
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
	<!-- Include SweetAlert2 CSS and JS -->
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
						<a href="./Agent-Account.php" >  
							<i class="fa-solid fa-id-card-clip"></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>					
			

					<li class="nav-link">
						<a href="./Agent-Users.php" class="dashboard-list-item active" >
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

	<main class="main">
	</section>
	<!-- Main Section -->
		<section class="Table-section" id="Table-Section">
			<div class="container">
				<table class="table" id="table">
					<tr>	

						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Start Date</th>

					</tr>		
					<?php

						$sql = "SELECT * FROM pending";
						$rs = mysqli_query($conn, $sql);

						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								// code...
								$UserID = $row['UserID'];
								$Firstname = $row['Firstname'];
								$Lastname = $row['Lastname'];
								$Email = $row['Email'];
								$Phone = $row['Phone'];
								$Address = $row['Address'];
								$Date = $row['Date_Joined'];


								echo "

								<tr>

									<td>".$Firstname."</td>
									<td>".$Lastname."</td>
									<td>".$Email."</td>
									<td>".$Phone."</td>
									<td>".$Address."</td>
									<td>".$Date."</td>

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
	<script src="./Assets/Js/Notification.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
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