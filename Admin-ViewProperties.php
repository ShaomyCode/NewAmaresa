<?php
include './Assets/Php/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - View Property</title>
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
				<a href="./Admin-Properties.php" class="btn"> 
					<i class="fa-solid fa-right-from-bracket"></i>
					<span> Go back </span>
				</a>
			</div>
		</div>
	</header>

	<main>

		<section class="Content">
			<div class="container">
				<?php

				if(isset($_GET['ViewID'])){
					$SelectedID = $_GET['ViewID'];

					$SelectedSQL = "SELECT * FROM Properties WHERE PropertyID = $SelectedID";
					$SelectedRS = mysqli_query($conn,$SelectedSQL);
					if($SelectedRS){
						while ($SelectedRow = mysqli_fetch_assoc($SelectedRS)) {
							$Property = $SelectedRow['Property'];
							$Price = $SelectedRow['Price'];
							$Bedrooms = $SelectedRow['Bedrooms'];
							$Bathrooms = $SelectedRow['Bathrooms'];
							$Area = $SelectedRow['Area_sqft'];
							$Date = $SelectedRow['Calendar'];
							$Description = $SelectedRow['Description'];

							$ImageExterior = './Images/'.$SelectedRow['IExterior'];
							$ImageHighlight1 = './Images/'.$SelectedRow['IBathroom'];
							$ImageHighlight2 = './Images/'.$SelectedRow['IBedroom'];
							$ImageHighlight3 = './Images/'.$SelectedRow['IAttic'];
							$ImageHighlight4 = './Images/'.$SelectedRow['IDining'];

							echo " 

							<div class ='View-Content'>

							<div class='Property-details'>
							<span class='Property-tag'> Viewing </span>
							<div class='Property-detail-items'>
							<input type='text' value='$Property'  readonly>
							<input type='text' value='$Price'  readonly>
							</div>										

							<div class='Property-detail-items'>
							<input type='text' value='$Bedrooms'  readonly>
							<input type='text' value='$Bathrooms'  readonly>
							</div>

							<div class='Property-detail-items'>
							<input type='text' value='$Area'  readonly>
							<input type='text' value='$Date'  readonly>
							</div>

							<div class='Property-detail-items'>
							<textarea readonly>$Description</textarea>
							</div>

							</div>

							<div class='Property-Images'>
							<div class='Property-image-exterior'>
							<img src='$ImageExterior' alt='Exterior'>
							</div>
							<div class='Property-image-highlights'>
							<img src='$ImageHighlight1' alt='Highlight 1'>
							<img src='$ImageHighlight2' alt='Highlight 2'>
							<img src='$ImageHighlight3' alt='Highlight 3'>
							<img src='$ImageHighlight4' alt='Highlight 4'>
							</div>
							</div>

							</div>

							";

						}
					}
				}
				?>
			</div>		
		</section>
		<section class="Update" id="Update">
			<div class="container">
				<h3 class="h3 update-title"> Your Dream Home, Newly Updated </h3>
				<span class="subtitle"> Where Classic Charm Meets Modern Convenience </span>
				<form method="POST" enctype="multipart/form-data">
					<div class="update-items">
						<input type="text" name="Property" placeholder="Property name" required>
						<input type="text" name="Price" placeholder="Price" required> 
					</div>			

					<div class="update-items">
						<input type="number" max="10" min="1" name="Bedrooms" placeholder="Bedroom/s" required> 	
						<input type="number" max="10" min="1" name="Bathrooms" placeholder="Bathroom/s" required> 	
						
					</div>

					<div class="update-items">
						<input type="text" name="Area" placeholder="Area sqft" required>
					</div>

					<div class="update-items">
						<textarea id="message" rows="5" name="Message" placeholder="Property Description..."></textarea>
					</div>	
					<!-- FORM FOR IMAGES -->
					<div class="form-items images">

						<div class="images-container">
							<label for="file-upload-exterior" class="custom-file-upload">Upload House Exterior</label>
							<span id="show-text-exterior" class="show-text">Exterior Image shows here</span>
							<input id="file-upload-exterior" type="file"  name="Exterior" accept="image/*" >
						</div>				

						<div class="images-container">
							<label for="file-upload-bedroom" class="custom-file-upload">Upload House Highlight</label>
							<span id="show-text-bedroom" class="show-text">Image shows here</span>
							<input id="file-upload-bedroom" type="file" name="Bedroom" accept="image/*" >	
						</div>					
					</div>					

					<div class="form-items images">

						<div class="images-container">
							<label for="file-upload-bathtoom" class="custom-file-upload">Upload House Highlight</label>
							<span id="show-text-bathtoom" class="show-text">Image shows here</span>
							<input id="file-upload-bathtoom" type="file" name="Bathroom" accept="image/*" >
						</div>				

						<div class="images-container">
							<label for="file-upload-Livingroom" class="custom-file-upload">Upload House Highlight
							</label>
							<span id="show-text-Livingroom" class="show-text">Image shows here</span>
							<input id="file-upload-Livingroom" type="file" name="Livingroom" accept="image/*" >
						</div>					
					</div>


					<div class="form-items images">
						<div class="images-container">
							<label for="file-upload-Diningroom" class="custom-file-upload">Upload House Highlight</label>
							<span id="show-text-Diningroom" class="show-text">Image shows here</span>
							<input id="file-upload-Diningroom" type="file" name="Diningroom" accept="image/*" >
						</div>	

					</div>

					<div class="form-btn">	
						<button type="submit" name="Update" class="Update-btn btn"> 
							<i class="fa-solid fa-pen-to-square"></i>
							<span>Update</span>
						</button>
					</div>			    				
				</form> 
			</div>
		</section>
		
		<!-- UPDATE: SQL -->
		<?php
		function uploadImage($inputName, &$newFileName) {
			if (!empty($_FILES[$inputName]["name"])) {
				$file = $_FILES[$inputName]["name"];
				$tempFile = $_FILES[$inputName]["tmp_name"];
				$newFileName = uniqid() . "-" . $file;
				$uploadPath = realpath('./Images') . DIRECTORY_SEPARATOR . $newFileName;
				move_uploaded_file($tempFile, $uploadPath);
			} else {
				$newFileName = null;
			}
		}

		$PropertyID = $_GET['ViewID'];
		if (isset($_POST['Update'])) {

			$Property = $_POST['Property'];
			$Price = $_POST['Price'];
			$Bedroom = $_POST['Bedrooms'];
			$Bathroom = $_POST['Bathrooms'];
			$Description = $_POST['Message'];
			$Area = $_POST['Area'];

			uploadImage('Exterior', $Newfile_Exterior);
			uploadImage('Bedroom', $Newfile_Bedroom);  
			uploadImage('Livingroom', $Newfile_Livingroom);  
			uploadImage('Diningroom', $Newfile_Diningroom);  
			uploadImage('Bathroom', $Newfile_Bathroom);


			$sql = "
			UPDATE Properties SET 
			Property='$Property', 
			Price='$Price', 
			Bedrooms='$Bedroom', 
			Bathrooms='$Bathroom', 
			Description='$Description', 
			Calendar=CURRENT_TIMESTAMP, 
			Area_sqft='$Area', 
			IExterior=" . ($Newfile_Exterior ? "'$Newfile_Exterior'" : "IExterior") . ",
			IBedroom=" . ($Newfile_Bedroom ? "'$Newfile_Bedroom'" : "IBedroom") . ",
			IBathroom=" . ($Newfile_Bathroom ? "'$Newfile_Bathroom'" : "IBathroom") . ",
			IAttic=" . ($Newfile_Livingroom ? "'$Newfile_Livingroom'" : "IAttic") . ",
			IDining=" . ($Newfile_Diningroom ? "'$Newfile_Diningroom'" : "IDining") . "
			WHERE PropertyID=$PropertyID
			";

			if (mysqli_query($conn, $sql)) {
				echo "<script>
				alert('Updated Successfully');
				setTimeout(function(){
					window.location.href = './Admin-Properties.php';
					}, 50);
					</script>";
				} else {
					echo "Error updating property: " . mysqli_error($conn);
				}
			}
			?>

		</main>


		<!-- Custom JS & JQUERY -->
		<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/UploadImage.js?v=<?php echo time(); ?>"></script>
		<!-- Fontawesome Link -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>		
	</body>
	</html>