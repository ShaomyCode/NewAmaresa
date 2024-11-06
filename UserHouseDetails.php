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
				<button class='Exterior-btn btn' onclick='ShowInquiry()'> Make an Inquiry </button>
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
			echo "

			<div class='Iframe-container' id='VirtualTour'>
				<div class='left-iframe'>
					<span> To move: </span>
					<img src='./Assets/Images/Move.png' alt='Move tutorial'>
				</div>
				<iframe src='$VirtualTour' class='VirtualTour' alt='No Virtual model.'>No Virtual Model</iframe>
			</div>

			";
		}
		?>


       <dialog id="Inquiry-Modal" class="dialog">
            <button onclick="CloseInquiry()" class="closebtn">X</button>    

            <div class="container">

                <form class="form Inquiry" method="POST" enctype="multipart/form-data" action="./Assets/Php/Index.php" autocomplete="on">
                    <?php 

                    $query = "
                    SELECT *
                    FROM User
                    WHERE UserID = $UserID
                    ";
                    $result = $conn->query($query);
                    $row = $result->fetch_assoc();
                    $firstname = $row['Firstname'];
                    $UserID = $row['UserID'];
                    $lastname = $row['Lastname'];
                    $number = $row['Phone'];
                    $Address = $row['Address'];
                    $Email = $row['Email'];

                     echo "	
                 
                    <div class='form-items'>

	                    <input type='text' name='Firstname' placeholder='First name' value='$firstname' required>
	                    <input type='text' name='Lastname' placeholder='Last name' value='$lastname'  required> 

	                    <input type='tel' maxlength='11' name='Phone'  class='PhoneInput' id'PhoneInput' placeholder='Contact Number' value='$number' required autocomplete='off'>       

                    </div>
                    <div class='form-items'>
                    <input type='text' name='Address' placeholder='Address' value='$Address' required>
                    <input type='email' name='Email' placeholder='Email Address' value='$Email' required>
                    </div> 
                    <input type='hidden' name='UserID' value='$UserID'>
                    <input type='hidden' name='PropertyID' id='propertyID'>
           
					<input list='options' id='Role' name='Property' placeholder='Select Property' required>
					     <datalist id='options'>
                    ";
		  			  $sql = "SELECT * FROM Properties";
		                    $rs = $conn->query($sql);
		                    if($rs){
		                    	while($rw = mysqli_fetch_assoc($rs)){
		                    		echo "
					                    <option value='$rw[PropertyID]'> $rw[Property] </option>

		                    		";
		                    	}
		                    	echo " </datalist>";

		                    }
		             echo " 
	       				<div class='textarea-container'>
							<textarea id='message' rows='5' name='Message' placeholder='Id like to inquire about this property...'></textarea>
						</div>
						<div class='form-items'>

                    		</div>
                    		<div>
                    			<input type='checkbox' id='cbx2' onclick='ShowReservation()' style='display: none;'> 
                    			<label for='cbx2' class='check'>
                    				<svg width='18px' height='18px' viewBox='0 0 18 18'>
                    					<path d='M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z'></path>
                    					<polyline points='1 9 7 14 15 4'></polyline>
                    				</svg>
                    				Reservation Fee (optional)
                    			</label>


                    			<div class='payments' id='payments'>
                    				<h3 class='h3 payment-title'> Gcash </h3>
                    				<img id='paymentImg' src='./Assets/Images/payment.png' >

                    				<div class='payment-upload' >
                    					<label for='file-upload' class='custom-file-upload btn'>
                    						Upload Here
                    					</label>
                    					<input id='file-upload' type='file' name='Receipt' accept='image/*'>
                    				</div>

                    			</div>

		             ";
                    ?>

                    			<script>
                    				const checkbox = document.getElementById('cbx2');
                    				const div = document.getElementById('payments');

                    				checkbox.addEventListener('change', function() {
                    					if (this.checked) {
                    						div.style.display = 'block'; 
                    					} else {
                    						div.style.display = 'none';
                    					}
                    				});
                    			</script>
                    		</div>
                    	</div>

                    	<div class="inquiry-buttons">
                    		<div id="panel">
                    			<span>Hello </span>
                    		</div>
                    		<span id="requirements" class="btn">Requirements</span>
                    		<button type="submit" name="SentInquiry" onclick="ShowSignupInquiry()" class="btn">Send Inquiry</button>
                    	</div>
                    </form>

             </div>
            </dialog>
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