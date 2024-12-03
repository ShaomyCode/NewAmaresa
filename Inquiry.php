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
	<title>Make an inquiry</title>
	<!-- Link: Custom -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Inquiry.css?v=<?php echo time(); ?>">
	<!-- LINK: FOR AMARESA FONT -->
	<link rel="stylesheet" type="text/css" href="./Assets/Momoiro-Regular/style.css">	
	<!-- Link: Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic\.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Link: Web Icon -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
</head>
<body>
	<main>	
		<header>
			<a href="javascript:history.back()"> 
				<span>Home</span>
			</a>
		</header>
		<section class="Personal">
			<h3 class="h3 Personal-title"> PERSONAL INFORMATION </h3>
			<?php

			$sql = "SELECT * FROM user WHERE UserID = $UserID";
			$rs = $conn->query($sql);
			$row = $rs-> fetch_assoc();
			$firstname = $row['Firstname'];
			$UserID = $row['UserID'];
			$lastname = $row['Lastname'];
			$phone = $row['Phone'];
			$email = $row['Email'];
			$Address = $row['Address'];
			echo "
			<form autocomplete='on' method='POST' action='./Assets/Php/Index.php'  enctype='multipart/form-data'>
				<div class='Personal-wrapper'>
					<div class='Personal-wrapper-item'>
						<input type='text' name='Firstname' placeholder='First name' value='$firstname' required>
						<input type='text' name='Lastname' placeholder='last name' value='$lastname' required>
						 <input type='hidden' name='UserID' value='$UserID'>
					</div>					

					<div class='Personal-wrapper-item'>
						  <input type='tel' maxlength='11' name='Phone'  class='PhoneInput' id'PhoneInput' placeholder='Contact Number' value='$phone' required autocomplete='off'> 
						<input type='email' name='Email' placeholder='Email Address' value='$email' required>
					</div>					

					<div class='Personal-wrapper-item'>
						<input type='text' name='Address' value='$Address' required>
					</div>
					<div class='Personal-wrapper-item'>
						  <textarea rows='5' name='Message' placeholder='Id like to inquire about this property...'></textarea>
					</div>

					<div class='Personal-wrapper-item ocular'>
					  <label for='date'>OCULAR VISIT </label>
					  <input type='date' id='ocular' name='Ocular'>
					</div>

				</div>
			</section>				
			";

			$sql_property = "SELECT * FROM properties WHERE PropertyID =$Holder ";
			$rs_property = $conn->query($sql_property);
			$row_property = $rs_property->fetch_assoc();
			$Property = $row_property['Property'];
			$PropertyID = $row_property['PropertyID'];
			$Block = $row_property['Block'];
			$Lot = $row_property['Lot'];
			$Phase = $row_property['Phase'];

			echo "
				<section class='Property'>
					<h3 class='h3 Property-title'> PROPERTY INFORMATION </h3>
					<div class='Property_wrapper'>
						<div class='Property_wrapper_item'>
							<input type='text' name='Property' value='$Property' readonly>
							<input type='hidden' name='PropertyID' value='$PropertyID'>
						</div>						

						<div class='Property_wrapper_item'>
							<label> BLOCK: </label>
							<input type='text' name='Block' value='$Block' readonly>
						</div>

						<div class='Property_wrapper_item'>
							<label> LOT: </label>
							<input type='text' name='Lot' value='$Lot' readonly>
						</div>

						<div class='Property_wrapper_item'>
							<label> PHASE: </label>
							<input type='text' name='Phase' value='$Phase' readonly>
						</div>
					</div>	

				</section>
			";

			echo "

			<section class='Reservation'>
				<h3 class='h3 Reservation-title'> RESERVATION (OPTIONAL) </h3>
				<span class='Reservation-substitle'> Gov’t ID (Driver’s License, Passport, PRC ID, SSS, Postal ID, TIN ID & other valid gov’t ID). </span>
					
				<div class='Reservation_image_container'>
					<div class='Reservation_img_items'>
						<div class='Upload_govID'>
							<label for='file-upload-goverment1' class='custom-file-upload'>Upload Gov't ID</label>
							<span id='show-text-goverment1' class='show-text'>Image shows here</span>
							<input id='file-upload-goverment1' type='file'  name='GovID_1' accept='image/*' >
						</div>						


						<div class='Upload_govID'>
							<label for='file-upload-goverment2' class='custom-file-upload'>Upload Gov’t ID</label>
							<span id='show-text-goverment2' class='show-text'>Image shows here</span>
							<input id='file-upload-goverment2' type='file'  name='GovID_2' accept='image/*' >
						</div>
					</div>						

					<div class='Reservation_img_items'>
						<div class='Proofs'>
							<label for='file-upload-billing' class='custom-file-upload'>Proof of Billing</label>
							<span id='show-text-billing' class='show-text'>Image shows here</span>
							<input id='file-upload-billing' type='file'  name='Billing' accept='image/*' >
						</div>						

						<div class='Proofs'>
							<label for='file-upload-income' class='custom-file-upload'>Proof of Income</label>
							<span id='show-text-income' class='show-text'>Image shows here</span>
							<input id='file-upload-income' type='file'  name='Income' accept='image/*' >
						</div>
					</div>						
					<div class='Reservation_img_items'>
						<input list='Payment_option' name='PaymentOption' placeholder='Select your preffered payment method'>
							<datalist id='Payment_option'>
								<option value='Inhouse'>
							</datalist> 
					</div>						

					<div class='Reservation_img_items Gcash_container'>		
						<img src='./Assets/Images/Gcash.PNG'>			
						<div class='Proofs'>
							<label for='file-upload-reservation' class='custom-file-upload'>Reservation</label>
							<span id='show-text-reservation' class='show-text'>Image shows here</span>
							<input id='file-upload-reservation' type='file'  name='Reservation' accept='image/*' >
						</div>
				
						<input type='tel' name='Payment'  placeholder='Reservation Payment' >	
					</div>
				</div>
				
				<div class='Reservation_btn'>
					<button type='submit' name='Inquiry' class='btn'> Send Inquiry </button>
				</div>
			</section>


			";

			echo "	</form>";

			?>
		<script src="./Assets/Js/Upload_Inquiry_Image.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>	
	</main>
</body>
</html>