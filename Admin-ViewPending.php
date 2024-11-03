<?php
	include './Assets/Php/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - View Pending</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Content.css?v=<?php echo time(); ?>"> 
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>"> 
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
</head>
<body>
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
			<div  class="Logout">
				<a href="./Admin-Pending.php" class="btn"> 
					<i class="fa-solid fa-right-from-bracket"></i>
					<span> Go back </span>
				</a>
			</div>
		</div>
	</header>

	<main>
		<section class="Content" id="Content">
			<div class="container">
				<?php
					if(isset($_GET['ViewID'])){

						$SelectedID = $_GET['ViewID'];
						$stmt = "SELECT Pending.*, Properties.Property FROM Pending JOIN Properties ON Pending.PropertyID= Properties.PropertyID WHERE PendingID = $SelectedID ";
						$rs = mysqli_query($conn,$stmt);
						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								$Lastname = $row['Lastname'];
								$Firstname = $row['Firstname'];
								$Email = $row['Email'];
								$Status = $row['Status'];
								$Phone = $row['Phone'];
								$Message = $row['Message'];
								$Address = $row['Address'];
								$Selected = $row['Property'];
								$Category = $row['Category'];
								$Receipt = "./Images/".$row['Receipt'];
								$Date = $row['Date'];

								echo " 

								<div class='Viewing-wrapper'>
									<div class='View-details'>
										<h3 class='h3 View-title'>Overview of $Lastname details</h3>
										<span>A Summary of Important Details</span>
										<div class='View-details-items'>
											<input type='text' value='$Lastname' readonly>
											<input type='text' value='$Firstname' readonly>
										</div>										

										<div class='View-details-items'>
											<input type='text' value='$Email' readonly>
											<input type='text' value='$Phone' readonly>
										</div>

										<div class='View-details-items'>
											<input type='text' value='$Address' readonly>
											<input type='text' value='$Selected' readonly>
										</div>		

										<div class='View-details-items'>
											<input type='text' value='$Category' readonly>
											<input type='text' placeholder='Category here...' value='$Status' readonly>
										</div>
										<div class='View-details-items'>
											<input type='text' value='$Date' readonly>
										</div>
										<div class='View-details-items'>
											<textarea placeholder='User Message here...' readonly>$Message</textarea>
										</div>
									</div>
									<div class='View-images'>
										<img src='$Receipt' alt='No Reservation fee'>
									</div>
								</div>

								";
								
							}
						}
					}
				?>
			</div>
		</section>
		<section class="Update">
			<div class="container">
				<form method="POST">
					<h3 class="Update-Title"> Send your Message </h3>
					<span class="Update-Subtitle">Your Voice Matters: We Value Your Thoughts and Feedback. Share What's on Your Mind!</span>

					<div class="Update-items">
						<input list="options" id="Role" name="Status" placeholder="Select Status here" required>
					    <datalist id="options">
					        <option value="Pending">
					        <option value="Verified">
					        <option value="Declined">
					    </datalist>
					</div>
					<div class="Update-items">
						<input type="hidden" name="UpdateID" value="<?php $_GET['ViewID'] ?>">
						<textarea name="Requirements" placeholder="Share your desire Message here..."></textarea>
					</div>
					<div class="Update-items">
						<button type="submit" name="Send" class="btn">
							<i class="fa-solid fa-paper-plane"></i>
							Send
						</button>
					</div>
				</form>
			</div>
			<?php

				if(isset($_POST['Send']) && isset($_GET['ViewID'])){
					$PendingID = $_GET['ViewID'];
				    $Status = $_POST['Status'];
				    $Requirements = $_POST['Requirements'];		
				    $query = "
				    UPDATE Pending SET
				    Status = '$Status',
				    Requirements = '$Requirements'
				    WHERE PendingID = '$PendingID'
				    ";		
				    mysqli_query($conn,$query);
				    echo "
				    <script>
				        alert('Message Successfully sent');
				     setTimeout(function(){
				        window.location.href = 'Admin-Pending.php';
				        }, 50); 
				    </script>"; 				    		    			
				}
			?>
		</section>
	</main>


		<!-- Custom JS & JQUERY -->
		<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/UploadImage.js?v=<?php echo time(); ?>"></script>
		<!-- Fontawesome Link -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>		
	</body>
	</html>