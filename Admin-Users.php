<?php

	include './Assets/Php/Connection.php';

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
						<a href="./Admin-Users.php" class="dashboard-list-item active" >
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
						<a href="./Admin-Assets/Php/Logout.php" class="dashboard-list-item">
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
						<th class="action-center">Action</th>
					</tr>		
					<?php

						$sql = "SELECT * FROM user";
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

									<td class='td-action'>

									<a href='./Assets/Php/Admin.php?archiveID=".$UserID."&value=User' onclick='return archiveConfirmation()' '>

									<i class='fa-solid fa-box-archive' ></i> 
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
	<!-- DIAGRAMS HERE -->
	<section class="Dialog-Section"> 

		<div class="float-diagram">
			<button onclick="OpenDialog()">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
			</button>
		</div>

		<dialog id="Adding-users-modal" class="dialog">
			<button onclick="CloseDialog()" class="closebtn" alt=""><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form adding" enctype="multipart/form-data" action="./Assets/Php/Admin.php">
					<div class="form-items">
						<input type="text" name="Firstname" placeholder="First Name" required>
						<input type="text" name="Lastname" placeholder="Last Name" required> 						
					</div>
					
					<div class="form-items">
						<input type="email" name="Email" placeholder="Email Address" required>
						<input type="tel" maxlength="11" name="Phone" class="PhoneInput" id="PhoneInput" placeholder="Contact Number" required>	
					</div>					
					<input type="text" name="Address" placeholder="Address" required>

					<div class="form-items">
						<input type="password" name="Password" placeholder="Password" required>
						<input type="password" name="ConfirmPassword" placeholder="Confirm Password" required>	
					</div>
					<!-- <input type="submit" name="Submit" value="Add"> -->
					<button type="submit" name="Submit" onclick="return AddConfirmation()" value="User" class="Submit"><i class="fa-solid fa-user-plus"></i> Add User</button> 
				</form>

			</div>
		</dialog>		
	</section>


	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
</body>
</html>