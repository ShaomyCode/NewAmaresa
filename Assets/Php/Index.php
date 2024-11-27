<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Include SweetAlert2 CSS and JS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
</head>
<body>

</body>
</html>
<?php

include('Connection.php');
session_start();

/***********************************************
	CALLING FOR FUNCTIONS
************************************************/
	if(isset($_POST['SentInquiry'])){
		inquiry($conn);
	}
	if(isset($_POST['login-btn'])){
		LoginUser($conn);
	}
	if(isset($_POST['Signin-btn'])){
		Signup($conn);
	}
	if(isset($_POST['Submit'])){
		Testimonial($conn);
	}
/***********************************************
	ADDING INQUIRY
	************************************************/
	function inquiry($conn){
		$Lastname = $_POST['Lastname'];
		$Firstname = $_POST['Firstname'];
		$Status = 'Pending';
		$UserID = $_POST['UserID'];
		$Email = $_POST['Email'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];
		$Message = $_POST['Message'];
		$SelectedProperty = $_POST['Property'];
		$Address = $_POST['Address'];
		$file = $_FILES['Receipt']['name'];
		if (!empty($file)) {
			$tempFile = $_FILES['Receipt']['tmp_name'];
			$newFileName = uniqid() . "-" . $file;
			$uploadPath = realpath('../../Images') . DIRECTORY_SEPARATOR . $newFileName;
			move_uploaded_file($tempFile, $uploadPath);
			$Category = 'Paid';
		} else {
			$newFileName = "No Image Attach";
			$Category = 'Unpaid';
		}
		
		$stmt = "INSERT INTO pending(Lastname, Firstname, Email, Phone, Message, Address, PropertyID, Category , Receipt, UserID, Status) 
		VALUES('$Lastname','$Firstname', '$Email', '$Phone', '$Message','$Address', '$SelectedProperty', '$Category','$newFileName', '$UserID','$Status') ";
		mysqli_query($conn, $stmt); 
		echo "<script>
		Swal.fire({
			icon: 'success',
			title: 'Your inquiry has been successfully submitted.',
			showConfirmButton: false,
			timer: 1500
			}).then(() => {
				window.location.href = '../../UserHouseDetails.php';
				});
				</script>";
		}
/***********************************************
	ADDING SIGNUP
 ************************************************/
	function Signup($conn) {
		$Firstname = $_POST['Firstname'];
		$Lastname = $_POST['Lastname'];
		$Email = $_POST['Email'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];
		$Password = $_POST['Password'];
		$Confirmpass = $_POST['Confirmpass'];
		$Role = "User";

		// Check if email already exists
		$checkQuery = "SELECT * FROM user WHERE Email = ?";
		$stmt = $conn->prepare($checkQuery);
		$stmt->bind_param("s", $Email);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			echo "<script>
			Swal.fire({
				icon: 'error',
				title: 'This email is already registered. Please use a different one.',
				showConfirmButton: false,
				timer: 3000
				}).then(() => {
					window.location.href = '../../index.php';
					});
					</script>";
					$stmt->close();

					return;
				}

				if ($Password === $Confirmpass) {
					$hash = password_hash($Password, PASSWORD_DEFAULT);

		// SQL to insert new user
					$query = "INSERT INTO user (Firstname, Lastname, Email, Phone, Address, Password, Role) VALUES (?, ?, ?, ?, ?, ?, ?)";
					$stmt = $conn->prepare($query);
					$stmt->bind_param("sssssss", $Firstname, $Lastname, $Email, $Phone, $Address, $hash, $Role);

					if ($stmt->execute()) {
			// Fetch the newly created user ID
						$userID = $stmt->insert_id;

			// Log the signup action in the ActivityLog
						$action = "New user signup";
						$logQuery = "INSERT INTO activitylog (UserID, Action) VALUES (?, ?)";
						$logStmt = $conn->prepare($logQuery);
						$logStmt->bind_param("is", $userID, $action);
						$logStmt->execute();
						$logStmt->close();

						echo "<script>
						Swal.fire({
							icon: 'success',
							title: 'Your Account has been created successfully!.',
							showConfirmButton: false,
							timer: 1500
							}).then(() => {
								window.location.href = '../../index.php';
								});
								</script>";

							} else {
								echo "Error: " . $stmt->error;
							}

							$stmt->close();
						} else {
							echo "<script>
							Swal.fire({
								icon: 'error',
								title: 'Password and Confirm Password do not match!',
								showConfirmButton: false,
								timer: 1500
								}).then(() => {
									window.location.href = '../../index.php';
									});
									</script>";
								}

								$conn->close();
							}

/***********************************************
	FILTER: LOGIN
	************************************************/
	function LoginUser($conn) {
	// Validate and sanitize email
		if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$Email = $conn->real_escape_string($_POST['email']);
			$Password = $_POST['password'];

		// Check in the Management table (for Admin/Staff)
			$stmtAdmin = $conn->prepare("SELECT * FROM management WHERE Email = ?");
			$stmtAdmin->bind_param("s", $Email);
			$stmtAdmin->execute();
			$resultAdmin = $stmtAdmin->get_result();

		// Check in the User table
			$stmtUser = $conn->prepare("SELECT * FROM user WHERE Email = ?");
			$stmtUser->bind_param("s", $Email);
			$stmtUser->execute();
			$resultUser = $stmtUser->get_result();

		// Admin/Staff login check
			if ($resultAdmin->num_rows > 0) {
				while ($row = $resultAdmin->fetch_assoc()) {
					if (password_verify($Password, $row['Password'])) {
						$_SESSION['Firstname'] = $row['Firstname'];
						$_SESSION['Lastname'] = $row['Lastname'];
						$_SESSION['UserID'] = $row['ManagementID'];
					$_SESSION['Role'] = $row['Role']; // Admin or Staff role

					// Log the login activity
					$UserID = $row['ManagementID'];
					$Status = "Admin/Staff logged in ";
					$logQuery = $conn->prepare("INSERT INTO activitylog(UserID, Action) VALUES (?, ?)");
					$logQuery->bind_param("is", $UserID, $Status);
					$logQuery->execute();
					$logQuery->close();

					// Redirect to Admin page
					echo "<script>
					Swal.fire({
						icon: 'success',
						title: 'Welcome Admin/Staff! You are logged in.',
						showConfirmButton: false,
						timer: 1500
						}).then(() => {
							window.location.href = '../../Admin-Account.php';
							});
							</script>";
						} else {
							echo "<script>
							Swal.fire({
								icon: 'error',
								title: 'Incorrect Password!',
								text: 'Please try again.',
								showConfirmButton: true
								}).then(() => {
									window.location.href = '../../index.php';
									});
									</script>";
								}
							}
						}
		// Regular User login check
						elseif ($resultUser->num_rows > 0) {
							while ($row = $resultUser->fetch_assoc()) {
								if (password_verify($Password, $row['Password'])) {
									$_SESSION['Firstname'] = $row['Firstname'];
									$_SESSION['Lastname'] = $row['Lastname'];
									$_SESSION['UserID'] = $row['UserID'];
					$_SESSION['Role'] = $row['Role']; // User role

					// Log the login activity
					$UserID = $row['UserID'];
					$Status = "User logged in ";
					$logQuery = $conn->prepare("INSERT INTO activitylog(UserID, Action) VALUES (?, ?)");
					$logQuery->bind_param("is", $UserID, $Status);
					$logQuery->execute();
					$logQuery->close();

					// Redirect to User page
					echo "<script>
					Swal.fire({
						icon: 'success',
						title: 'You are logged in.',
						showConfirmButton: false,
						timer: 1500
						}).then(() => {
							window.location.href = '../../Login.php';
							});
							</script>";
						} else {
							echo "<script>
							Swal.fire({
								icon: 'error',
								title: 'Incorrect Password!',
								text: 'Please try again.',
								showConfirmButton: true
								}).then(() => {
									window.location.href = '../../index.php';
									});
									</script>";;
								}
							}
						} else {
							echo "<script>
							Swal.fire({
								icon: 'error',
								title: 'Email not found',
								text: 'Please try again.',
								showConfirmButton: true
								}).then(() => {
									window.location.href = '../../index.php';
									});
									</script>";

								}

								$stmtAdmin->close();
								$stmtUser->close();
							} else {
								echo "<script>
								Swal.fire({
									icon: 'error',
									title: 'Invalid Email!',
									text: 'Please try again.',
									showConfirmButton: true
									}).then(() => {
										window.location.href = '../../index.php';
										});
										</script>";
									}
								}

/***********************************************
FUNCTION FOR EDITING: PROFILE
************************************************/

/***********************************************
 # TESTIMONIAL
************************************************/
function Testimonial($conn) {
	$Name = $_POST['Name'];
	$Rating = $_POST['rating'];
	$Message = $_POST['Message'];

	$sql = "INSERT INTO message(sender, Rate, Message) VALUES('$Name', $Rating, '$Message')";
	mysqli_query($conn, $sql);

	if (isset($_SESSION['UserID'])) {
		$redirectUrl = '../../Login.php';
	} else {
		$redirectUrl = '../../index.php';
	}

	echo "<script>
	Swal.fire({
		icon: 'success',
		title: 'What You Think Counts.',
		text: 'Your feedback helps us grow and improve every day.',
		showConfirmButton: false,
		timer: 1500
		}).then(() => {
			window.location.href = '$redirectUrl';
			});
			</script>";
		}
/***********************************************
	DELETE PENDING
************************************************/
if(isset($_GET['DeleteID'])){
		$ItemID = $_GET['DeleteID'];
		$sql = "DELETE FROM pending WHERE PendingID = $ItemID";
		mysqli_query($conn, $sql);
	echo "<script>
	Swal.fire({
		icon: 'success',
		title: 'Successfully Deleted',
		showConfirmButton: false,
		timer: 1500
		}).then(() => {
			window.location.href = '../../Login.php';
			});
			</script>";
	
}
/***********************************************
	GET THE HOUSE ID
************************************************/
if(isset($_POST['PassID'])){
		$Holder = $_POST['IDHolder'];
		$_SESSION['Holder'] = $Holder;
		header("location: ../../UserHouseDetails.php" );
	}    
	if(isset($_POST['PassIDUser'])){
		$Holder = $_POST['IDHolder'];
		$_SESSION['Holder'] = $Holder;
		header("location: ../../HouseDetails.php" );
}
?>
