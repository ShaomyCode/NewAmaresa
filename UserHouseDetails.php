<?php
	include './Assets/Php/Connection.php';
	session_start();
    $Firstname = $_SESSION['Firstname'];
    $Lastname = $_SESSION['Lastname'];
    $UserID = $_SESSION['UserID'];
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
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
</head>
<body>
	<header class="header">
			<div class="header-top"> 
				<div class="container">

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

						<a class="header-top-btn-nice"  href="./Login.php"> 
							<i class="fa-solid fa-house"></i>
							<span> Home </span>
						</a>


						<div class="header-user-display-nice">
							<i class="fa-solid fa-user-tie"></i> 
							<?php
							
							echo $Lastname;

							?>
						</div>
					</div>
				</div>

			</div>
	</header>


	<main>
		<?php
		$sql = "SELECT * FROM properties WHERE PropertyID = $Holder";
		$rs = mysqli_query($conn,$sql);

		if($rs){
			while ($row = mysqli_fetch_assoc($rs)) {
				$ImageExterior = './Images/'.$row['IExterior'];
				$IBathroom = './Images/'.$row['IBathroom'];
				$IBedroom = './Images/'.$row['IBedroom'];
				$IAttic = './Images/'.$row['IAttic'];
				$IDining = './Images/'.$row['IDining'];
				$Properties = $row['Property'];
				$Block = $row['Block'];
				$Lot = $row['Lot'];
				$Phase = $row['Phase'];
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
					<img src='$ImageExterior' alt='Exterior'>
					<div class='inner-btns-wrapper'>
						<a href='./Inquiry.php?UserID=".$UserID."&HouseID=".$Holder."' class='btn'> Make inquiry </button>
						<a href='#VirtualTour' class='virtual-tour-btn btn'> Go to 3D </a>
					</div>
				</figure>
				<figure class='HouseDetails'> 
				
					<div class='thumbnail'>
						<img src='$IBathroom'. alt='Exterior' onclick='enlargeImage(this, 0)'>
					</div>

					<div class='thumbnail'>
					<img src='$IBedroom' alt='Exterior' onclick='enlargeImage(this, 1)'>
					</div>

					<div class='thumbnail'>
					<img src='$IAttic' alt='Exterior' onclick='enlargeImage(this, 2)'>
					</div>

					<div class='thumbnail'>
					<img src='$IDining' alt='Exterior' onclick='enlargeImage(this, 3)'>
					</div>

				</figure>
			    <div id='overlay'>
			      <span class='close' onclick='closeImage()'>&times;</span>
			        <img id='enlargedImage' src='' alt='Enlarged Image'>
			        <a class='prev' onclick='changeImage(-1)'>&#10094;</a>
			        <a class='next' onclick='changeImage(1)'>&#10095;</a>			        
			    </div>

			</div>
			</section>
			";				
			}

			echo " 
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
									<i class='fa-solid fa-house-flag'></i>
									<span>Block: $Block</span>
									</li>							
									
									<li class='Overview-list-items'>
									<i class='fa-solid fa-house-flag'></i>
									<span>lot: $Lot</span>
									</li>									
									<li class='Overview-list-items'>
									<i class='fa-solid fa-house-flag'></i>									
									<span>Phase: $Phase</span>
									</li>
								</ul>
							</div>
						
					
							<div class='Description-Details'>
								<h3 class='h3 Titles'> Description </h3>
								<span>$Description </span>
							</div>
				
						</div>
						<div class='RightHouse-Details'>
							<div class='House_Map_Container'>
								<img src='./Assets/Images/Amaresa_House_Map.jpg' alt='House-Map'>
							</div>
						</div>

					</div>
				</section>
			";
			echo "

			<div class='Iframe-container' id='VirtualTour'>
				<div class='left-iframe'>
					<span> To move: </span>
					<img src='./Assets/Images/Move.png' alt='Move tutorial' >
				</div>
				<iframe src='$VirtualTour' class='VirtualTour' alt='No Virtual model.'>No Virtual Model</iframe>
			</div>

			";
		}
		?>

	</main>

			<!-- Script: Custom -->
		<script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Thumbnails.js?v=<?php echo time(); ?>"></script>		
		<script src="./Assets/Js/Swiper.js?v=<?php echo time(); ?>"></script>
		<!-- JS: Swiper -->
		<script type="text/javascript" src="./Assets/Js/swiper-bundle.min.js"></script> 	
		<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
		<!-- Script: Fontawesome -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
		<!-- IMAGE UPLOAD -->
		<script src="./Assets/Js/UploadPayment.js?v=<?php echo time(); ?>"></script>
</body>
</html>