<?php
	include './Assets/Php/Connection.php';
	session_start();
	$Holder = $_SESSION['Holder'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - House Details </title>
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

						<a class="header-top-btn"  href="./Index.php"> 
							<i class="fa-solid fa-house"></i>
							<span> Home </span>
						</a>


					</div>
				</div>

			</div>
	</header>


	<main>
		<?php
		$sql = "SELECT * FROM Properties WHERE PropertyID = $Holder";
		$rs = mysqli_query($conn,$sql);

		if($rs){
			while ($row = mysqli_fetch_assoc($rs)) {
				$ImageExterior = './Images/'.$row['IExterior'];
				$IBathroom = './Images/'.$row['IBathroom'];
				$IBedroom = './Images/'.$row['IBedroom'];
				$IAttic = './Images/'.$row['IAttic'];
				$IDining = './Images/'.$row['IDining'];
				$Properties = $row['Property'];		
				$Description = $row['Description'];		
				$Price = $row['Price'];		
				$Bedrooms = $row['Bedrooms'];
				$Bathrooms = $row['Bathrooms'];
				$Area = $row['Area_sqft'];
				$VirtualTour =  $row['VirtualTour'];
			// FOR IMAGE
			echo "

			<section class='ImageContainer' id='ImageContainer'>
			<div class='container'>

			<figure class='Exterior'>
				<img src='$ImageExterior' alt='Exterior' '>
			</figure>

			<figure class='HouseDetails'> 
				<img src='$IBathroom'. alt='Exterior'>
				<img src='$IBedroom' alt='Exterior'>
				<img src='$IAttic' alt='Exterior'>
				<img src='$IDining' alt='Exterior'>
			</figure>
			</div>
			</section>
			";				
			}

			echo " 
				<a href='#VirtualTour' class='VirtualTour-btn btn'> Go to 3D </a>
				<section class='HouseDetails-Container'>
					<div class='container'>
						<div class='LeftHouse-Details'>
							<div class='House-Details'>

								<h3 class='h3 Titles'> $Properties </h3>
								<ul class='House-list'>
									<li class='list-items'>
										<i class='fa-solid fa-hand-holding-dollar'></i>
										<span> Asking Price : $Price</span>
									</li>					

									<li class='list-items'>
										<i class='fa-solid fa-bed'></i>
										<span> Bedrooms : $Bedrooms</span>
									</li>					

									<li class='list-items'>
										<i class='fa-solid fa-bath'> </i>
										<span>Bathrooms : $Bathrooms</span>
									</li>					

									<li class='list-items'>
										<i class='fa-solid fa-maximize'></i>
										<span>Lot Area(sqm) : $Area</span>
									</li>
								</ul>									
							</div>

							<div class='Overview-Details'>
								<h3 class='h3 Titles'> Overview </h3>
								<ul class='Overview-list'>
									<li class='Overview-list-items'>
									<i class='fa-solid fa-maximize'></i>
									<span>Lot Area(sqm): $Area</span>
									</li>							
									<li class='Overview-list-items'>
									<i class='fa-solid fa-layer-group'></i>
									<span>Floor Area(sqm): $Area</span>
									</li>							
									<li class='Overview-list-items'>
									<i class='fa-solid fa-couch'></i>
									<span>Furnishing: Fully furnished</span>
									</li>							
									
									<li class='Overview-list-items'>
									<i class='fa-solid fa-square-parking'></i>
									<span>Parking Spaces: 1</span>
									</li>
								</ul>
							</div>

						</div>
						
						<div class='RightHouse-Details'>
							<div class='Description-Details'>
								<h3 class='h3 Titles'> Description </h3>
								<span>$Description </span>
							
							</div>
						</div>

					</div>

				</section>
			";

			if (isset($VirtualTour) && !empty($VirtualTour)) {
			    echo "
			        <div class='Iframe-container' id=>
			            <div class='left-iframe'>
			                <span>To move:</span>
			                <img src='./Assets/Images/Move.png' alt='Move tutorial'>
			            </div>
			            <iframe src='$VirtualTour' class='VirtualTour' alt='Virtual Tour'>No Virtual Model</iframe>
			        </div>
			    ";
			} else {
			    echo "<h3 style='text-align:center; font-size: 24px;'>No Virtual Tour Found </h3>";
			}


		}
		?>


     
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