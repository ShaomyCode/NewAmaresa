<?php

	include './Assets/Php/Connection.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Properties</title>
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
						<a href="./Admin-Properties.php" class="dashboard-list-item active">
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
	<!-- MAIN SECTION -->
		<section class="Table-section" id="Table-Section">
			<div class="container">

				<table class="table" id="table">
					<tr>	

						<th>Property</th>
						<th>Price</th>
						<th>Bedrooms</th>
						<th>Bathrooms</th>
						<th>Square Meters</th>
						<th>Status</th>
						<th>Date Release</th>
						<th class="action-center">Actions</th>
					</tr>	
					<!-- GETTING THE DATAS FROM PROPERTIES TO DISPLAY -->
					<?php

						$sql = "SELECT * FROM properties";
						$rs = mysqli_query($conn, $sql);

						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								// code...
								$PropertyID = $row['PropertyID'];
								$Property = $row['Property'];
								$Price = $row['Price'];
								$Description = $row['Description'];
								$Bedrooms = $row['Bedrooms'];
								$Bathrooms = $row['Bathrooms'];
								$Area_sqft = $row['Area_sqft'];
								$Date = $row['Calendar'];
								$Status = $row['Status'];	
								echo "

								<tr>
									<td>".$Property."</td>
									<td>".$Price."</td>
									<td>".$Bedrooms."</td>
									<td>".$Bathrooms."</td>	
									<td>".$Area_sqft."</td>	
									<td>".$Status."</td>	
									<td>".$Date."</td>

							<td class='td-action'>
								<a href='./Admin-ViewProperties.php?ViewID=".$PropertyID."' class='custom-tooltip' data-title='View/Edit'><i class='fa-solid fa-eye'></i></a>
								<a href='./Assets/Php/Admin.php?archiveID=".$PropertyID."&value=Property' onclick='return archiveConfirmation()'' class='custom-tooltip' data-title='Archive'>
										<i class='fa-solid fa-box-archive' ></i>
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
	<!-- DIAGRAMS HERE -->
	<section class="Dialog-Section"> 

		<div class="float-diagram">
			<button onclick="OpenDialog()"><i class="fa-solid fa-circle-plus"></i></button>
		</div>

		<dialog id="Adding-users-modal" class="dialog">
			<button onclick="CloseDialog()" class="closebtn" alt=""><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form adding" enctype="multipart/form-data" action="./Assets/Php/Admin.php" autocomplete="on">
					<div class="form-items">
						<input type="text" name="Property" placeholder="Property name" required>
						<input type="number" name="Price" placeholder="Price" required>	
					</div>					

					<div class="form-items">
						<input type="number" max="10" min="1" name="Bedroom" placeholder="Bedroom/s" required> 						
						<input type="number" max="10" min="1" name="Bathroom" placeholder="Bathrooms/s" required> 												
					</div>

					<div class="form-items">
						<input type="text" name="Block" placeholder="Block" required>
						<input type="text" name="Lot" placeholder="Lot" required>	
						<input type="text" name="Phase" placeholder="Phase" required>	
					</div>	

					<input type="text" name="Area" placeholder="Area sqft" required>

					<div class="virtual">
						<span>Example: virtual/Amaresa House/index.html</span>
						<input type="text" name="VirtualTour" placeholder="Virtual file location" >
					</div>
				    <div class="textarea-container">
				        <textarea id="message" rows="5" name="Message" placeholder="Property Description..."></textarea>
				    </div>		

					<!-- FORM FOR IMAGES -->
					<div class="form-items images">

						<div class="images-container">
						    <label for="file-upload-exterior" class="custom-file-upload">Upload Exterior</label>
						    <span id="show-text-exterior" class="show-text">Exterior Image shows here</span>
						    <input id="file-upload-exterior" type="file"  name="Exterior" accept="image/*" >
						</div>				

						<div class="images-container">
						    <label for="file-upload-bedroom" class="custom-file-upload">Upload Highlight</label>
						    <span id="show-text-bedroom" class="show-text">Highlight show here</span>
						    <input id="file-upload-bedroom" type="file" name="Bedroom" accept="image/*" >	
						</div>					
					</div>					

					<div class="form-items images">

						<div class="images-container">
						    <label for="file-upload-bathtoom" class="custom-file-upload">Upload Highlight</label>
						    <span id="show-text-bathtoom" class="show-text">Highlight show here</span>
						    <input id="file-upload-bathtoom" type="file" name="Bathroom" accept="image/*" >
						</div>				

						<div class="images-container">
						    <label for="file-upload-Livingroom" class="custom-file-upload">Upload Highlight
						    </label>
						    <span id="show-text-Livingroom" class="show-text">Highlight show here</span>
						    <input id="file-upload-Livingroom" type="file" name="Livingroom" accept="image/*" >
						</div>					
					</div>


					<div class="form-items images">
						<div class="images-container">
						    <label for="file-upload-Diningroom" class="custom-file-upload">Upload Highlight</label>
						    <span id="show-text-Diningroom" class="show-text">Highlight show here</span>
						    <input id="file-upload-Diningroom" type="file" name="Diningroom" accept="image/*" >
						</div>	
					
					</div>
					
					<button type="submit" name="Submit"  value="Property" class="Submit"><i class="fa-solid fa-house-circle-check"></i> Add Property </button>  
				</form>

			</div>
		</dialog>		
	</section>


	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/UploadImage.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
		<!-- NO TURNING BACk -->
		<script language="javascript" type="text/javascript">	
	            window.history.forward();
		</script>	
</body>
</html>