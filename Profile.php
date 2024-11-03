<?php
	include './Assets/Php/Connection.php';
	session_start();
    $Firstname = $_SESSION['Firstname'];
    $Lastname = $_SESSION['Lastname'];
    $UserID = $_SESSION['UserID'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - User Profile</title>
	<!-- Custom Css Link -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/House.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	
	<!-- Google font link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!-- Script: JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">
</head>
<body>
	<header class="header">
			<div class="header-top"> 
				<div class="container">
					<ul class="header-top-list">

						<li>
							<a href="https://www.amaresa.ph/" class="header-top-link">
								<i class="fa-solid fa-paper-plane"></i>
								<span>amaresa.ph</span>
							</a>
						</li>						

						<li> 
							<a href="https://www.google.com/maps/dir//Amaresa+Marilao,+3019+M.+Villarica+Rd,+Marilao,+3019+Bulacan/@14.7950949,121.0162162,17z/data=!4m17!1m7!3m6!1s0x3397b38da5906293:0x8b01e358c47a7685!2sAmaresa+Marilao!8m2!3d14.7950897!4d121.0187911!16s%2Fg%2F11gpnfmdlb!4m8!1m0!1m5!1m1!1s0x3397b38da5906293:0x8b01e358c47a7685!2m2!1d121.0188034!2d14.7951434!3e2?entry=ttu"  class="header-top-link">
								<i class="fa-solid fa-map-location-dot"></i>
								<span>3019 M. Villarica Rd, Marilao, 3019 Bulacan</span>
							</a>
						</li>
					</ul>
					<div class="wrapper">

						<ul class="header-top-social-list">
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-x-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</li>																							
						</ul>

						<a class="header-top-btn"  href="./Login.php"> 
							<i class="fa-solid fa-house"></i>
							<span> Home </span>
						</a>


						<div class="header-user-display">
							<i class="fa-solid fa-user-tie"></i> 
							<?php
							
							echo $Firstname, " " .$Lastname;

							?>
						</div>
					</div>
				</div>

			</div>
	</header>
	<main>
		<section class="Profile-Wrapper" class="Profile-Wrapper">
			<div class="Profile-present-info">
				<h3 class="h3 Profile-title"> Present Information </h3>
				<span class="Profile-subtitle">Presenting the most recent insights... </span>
				<?php

					if(isset($_GET['EditID'])){
						$EditID = $_GET['EditID'];
						
						$sql = "SELECT * FROM User WHERE UserID = $EditID";
						$rs = mysqli_query($conn,$sql);
						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								$Firstname = $row['Firstname'];
								$Lastname = $row['Lastname'];
								$Email = $row['Email'];
								$Phone = $row['Phone'];
								$Address = $row['Address'];
								$Password = $row['Password'];
								$Date = $row['Date_Joined'];
							

							echo "
								<div class='Profile-present-items'>
									<input type='text' value='$Firstname' readonly>
									<input type='text' value='$Lastname' readonly>
								</div>								

								<div class='Profile-present-items'>
									<input type='text' value='$Email' readonly>
									<input type='text' value='$Phone' readonly>
								</div>

								<div class='Profile-present-items'>
									<input type='text' value='$Address' readonly>
									<input type='text' value='$Password' readonly>
								</div>
								<div class='Profile-present-items'>
									<input type='text' value='$Date' readonly>
								</div>
							";								
							}
						}
					
					}
				?>
			</div>
			<div class="Profile-refresh">
				<h3 class="h3 Profile-refresh-title"> Refreshing Your Profile </h3>
				<span class="Profile-subtitle">Breathe New Life into Your Profile </span>
				<form method='POST' >
					<div class='Profile-refresh-items'>
						<input type='text' name="Firstname" placeholder='Update your First name' required>
						<input type='text' name="Lastname" placeholder='Update your Last name' required>
					</div>								
						<input type="hidden" name="UpdateID" value="$EditID">
					<div class='Profile-refresh-items'>
						<input type='text' name="Email" placeholder='Update your Email' required>
						<input type="tel" maxlength="11" name="Phone" class="PhoneInput" id="PhoneInput" placeholder="Contact Number" required>	
					</div>

					<div class='Profile-refresh-items'>
						<input type='text' name="Address" placeholder='Update your Address' required>
						<input type='Password' name="Password" placeholder='Update your Password' required>
					</div>
					<div class='Profile-refresh-items'>
						<button type='submit' name='Update-Profile' class='Profile-btn btn'>
							<i class='fa-regular fa-pen-to-square'></i>
							<span>Update</span>
						</button>
					</div>
				</form>
			</div>
			<?php

				if(isset($_POST['Update-Profile'])){
					$ProfileID = $_GET['EditID'];
					$Firstname = $_POST['Firstname'];
					$Lastname = $_POST['Lastname'];
					$Email = $_POST['Email'];
					$Phone = $_POST['Phone'];
					$Address = $_POST['Address'];
					$Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

					$sql = "
					UPDATE User SET 
					Firstname = '$Firstname',
					Lastname = '$Lastname',
					Email = '$Email',
					Phone = '$Phone',
					Address = '$Address',
					Password = '$Password'
					WHERE UserID = $ProfileID
					";

					if(mysqli_query($conn,$sql)){
						echo "
						<script>
						alert('Updated Successfully');
						setTimeout(function(){
							window.location.href = './Login.php';
							}, 50);
						</script>";
					}else{
						echo "Error Updating User".mysqli_error($conn);
					}
				}


			?>
		</section>
		<section class="Purchase-Wrapper" class='Purchase-Wrapper'>
			<h3 class="h3 Purchase-title"> Ready to Purchase </h3>
			<span class="Profile-subtitle"> Reach Out for More Information </span>
			<?php
			if (isset($_GET['EditID'])) {
			    $ProfileID = $_GET['EditID'];
				$sql = "SELECT Pending.*, User.*, Properties.Property 
       			 FROM Pending 
       			 JOIN User ON Pending.UserID = User.UserID
        		 JOIN Properties ON Pending.PropertyID = Properties.PropertyID
       			 WHERE User.UserID = $ProfileID";


			    $rs = mysqli_query($conn, $sql);
			    if ($rs) {
			        while ($row = mysqli_fetch_assoc($rs)) {
			            $Property = $row['Property'];
			            $Category = $row['Category'];
			            $PendingID = $row['PendingID'];
			            $Date = $row['Date'];
			            $Status = $row['Status'];
			            $Requirements = $row['Requirements'];
			            echo "<div class='Purchase-items'>
			                    <input type='text' value='$Property' readonly>
			                    <input type='text' value='$Category' readonly>
			                    <input type='text' value='$Date' readonly>
			                    <input type='text' value='$Status' readonly>
			                    <a href='./Assets/Php/Index.php?DeleteID=$PendingID'><i class='fa-solid fa-trash'></i></a>
			                  </div>

			                  <div class='Purchase-items'>
			                  	<textarea placeholder='No Message from the Amaresa yet....' readonly>$Requirements</textarea>
			                  </div>
			                  ";
			        }
			    }
			}

			?>
		</section>
	</main>
	
	
			<!-- Script: Custom -->
		<script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Swiper.js?v=<?php echo time(); ?>"></script>
		<!-- JS: Swiper -->
		<script type="text/javascript" src="./Assets/Js/swiper-bundle.min.js"></script> 	
		<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
		<!-- Script: Fontawesome -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
</body>
</html>