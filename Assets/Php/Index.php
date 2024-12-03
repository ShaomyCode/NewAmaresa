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
	if(isset($_POST['Inquiry'])){
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
	if(isset($_POST['Update_Overview'])){
		UpdateInquiry($conn);
	}
	if (isset($_POST['Profile_Edit_update'])) {
		Update_Profile($conn);
	}
/***********************************************
	ADDING INQUIRY
	************************************************/
function uploadImage($inputName, &$newFileName) {
    $file = $_FILES[$inputName]["name"];
    $tempFile = $_FILES[$inputName]["tmp_name"];
    $newFileName = uniqid() . "-" .$file;
    $uploadPath = realpath('../../Images') . DIRECTORY_SEPARATOR . $newFileName;
    move_uploaded_file($tempFile, $uploadPath);
}

function inquiry($conn) {
    // PERSONAL INFO
    $firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['Lastname']);
    $phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $address = mysqli_real_escape_string($conn, $_POST['Address']);
    $message = mysqli_real_escape_string($conn, $_POST['Message']);
    $ocular = mysqli_real_escape_string($conn, $_POST['Ocular']);
    $payment = mysqli_real_escape_string($conn, $_POST['Payment']);
    // PROPERTY INFO
    $property = mysqli_real_escape_string($conn, $_POST['PropertyID']);
    $UserID = mysqli_real_escape_string($conn, $_POST['UserID']);
    $block = mysqli_real_escape_string($conn, $_POST['Block']);
    $lot = mysqli_real_escape_string($conn, $_POST['Lot']);
    $phase = mysqli_real_escape_string($conn, $_POST['Phase']);
    $Status = "Stage 1";
    // Upload Images
    $GovID1Uploaded = uploadImage('GovID_1', $Gov1);
    $GovID2Uploaded = uploadImage('GovID_2', $Gov2);
    $BillingUploaded = uploadImage('Billing', $Billing);
    $IncomeUploaded = uploadImage('Income', $Income);
    $ReservationUploaded = uploadImage('Reservation', $Reservation);

        // Insert into clients table
        $sql = "
        INSERT INTO 
        	pending (Lastname, Firstname, Email, Phone, Message, Address, ocular, Stage, Payment, GovermentID1, GovermentID2, Billing, Income, Reservation, UserID, PropertyID) 
        VALUES 
        	('$lastname', '$firstname', '$email','$phone', '$message','$address', '$ocular','$Status', '$payment', '$Gov1', '$Gov2', '$Billing', '$Income', '$Reservation', '$UserID', '$property')
        ";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
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
    } else {
        // Handle query failure
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'An error occurred while submitting your inquiry. Please try again later.',
                text: '" . mysqli_error($conn) . "',
                showConfirmButton: true
            });
            </script>";
    }
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

					if($_SESSION['Role'] == "Admin"){
										// Redirect to Admin page
					echo "<script>
					Swal.fire({
						icon: 'success',
						title: 'Welcome Admin! You are logged in.',
						showConfirmButton: false,
						timer: 1500
						}).then(() => {
							window.location.href = '../../Admin-Account.php';
							});
							</script>";	
						}elseif($_SESSION['Role'] == "Staff"){
											// Redirect to Admin page
					echo "<script>
					Swal.fire({
						icon: 'success',
						title: 'Welcome Staff! You are logged in.',
						showConfirmButton: false,
						timer: 1500
						}).then(() => {
							window.location.href = '../../Staff-Account.php';
							});
							</script>";	
						}elseif($_SESSION['Role'] == "Agent"){
											// Redirect to Admin page
					echo "<script>
					Swal.fire({
						icon: 'success',
						title: 'Welcome Agent! You are logged in.',
						showConfirmButton: false,
						timer: 1500
						}).then(() => {
							window.location.href = '../../Agent-Account.php';
							});
							</script>";								
						}


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
	UPDATE PROFILE
************************************************/
function Update_Profile($conn) {
    $SelectedID = $_POST['Update_UserID'];
    
    // Get form data (check for empty values to decide if they need to be updated)
    $Update_Firstname = !empty($_POST['Update_Firstname']) ? $_POST['Update_Firstname'] : null;
    $Update_Lastname = !empty($_POST['Update_Lastname']) ? $_POST['Update_Lastname'] : null;
    $Update_Email = !empty($_POST['Update_Email']) ? $_POST['Update_Email'] : null;
    $Update_Phone = !empty($_POST['Update_Phone']) ? $_POST['Update_Phone'] : null;
    $Update_Address = !empty($_POST['Update_Address']) ? $_POST['Update_Address'] : null;
    $Update_Password = !empty($_POST['Update_Password']) ? password_hash($_POST['Update_Password'], PASSWORD_DEFAULT) : null;

    // Prepare the SQL query dynamically based on the fields that were updated
    $updateFields = [];
    $params = [];
    $paramTypes = '';

    if ($Update_Firstname !== null) {
        $updateFields[] = "Firstname = ?";
        $params[] = $Update_Firstname;
        $paramTypes .= 's';
    }
    if ($Update_Lastname !== null) {
        $updateFields[] = "Lastname = ?";
        $params[] = $Update_Lastname;
        $paramTypes .= 's';
    }
    if ($Update_Email !== null) {
        $updateFields[] = "Email = ?";
        $params[] = $Update_Email;
        $paramTypes .= 's';
    }
    if ($Update_Phone !== null) {
        $updateFields[] = "Phone = ?";
        $params[] = $Update_Phone;
        $paramTypes .= 's';
    }
    if ($Update_Address !== null) {
        $updateFields[] = "Address = ?";
        $params[] = $Update_Address;
        $paramTypes .= 's';
    }
    if ($Update_Password !== null) {
        $updateFields[] = "Password = ?";
        $params[] = $Update_Password;
        $paramTypes .= 's';
    }

    if (!empty($updateFields)) {
        // Create the dynamic SQL query
        $sql = "UPDATE user SET " . implode(", ", $updateFields) . " WHERE UserID = ?";
        $params[] = $SelectedID;  // Add the user ID to the parameters
        $paramTypes .= 'i';  // The user ID is an integer

        // Prepare and execute the query
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind the parameters
            mysqli_stmt_bind_param($stmt, $paramTypes, ...$params);

            // Execute the query
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Profile Updated Successfully!',
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
                        title: 'Error Updating Profile',
                        showConfirmButton: true
                    });
                </script>";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'SQL Statement Error',
                    showConfirmButton: true
                });
            </script>";
        }
    }
}
/***********************************************
	PROFILE - OVERVIEW
************************************************/
function uploadImageOverview($inputName, &$newFileName) {
    if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === 0) {
        $file = $_FILES[$inputName]["name"];
        $tempFile = $_FILES[$inputName]["tmp_name"];
        $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Check if file type is allowed
        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = uniqid() . "-" . basename($file);
            $uploadPath = realpath('../../Images') . DIRECTORY_SEPARATOR . $newFileName;

            // Move uploaded file to the target directory
            if (move_uploaded_file($tempFile, $uploadPath)) {
                return true;
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error uploading file: $inputName.',
                        showConfirmButton: true
                    });
                </script>";
                return false;
            }
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid file type for $inputName.',
                    showConfirmButton: true
                });
            </script>";
            return false;
        }
    }
    return false; // No file uploaded or there was an error
}

function UpdateInquiry($conn) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $SelectedID = $_POST['SelectedID']; // Ensure this field exists in the form

        // Array to hold column names and their new values
        $columnsToUpdate = [];

        // Attempt to upload files for each input and add to the update array if successful
        $fields = [
            'Billing' => 'Billing',
            'Income' => 'Income',
            'GovermentID_1' => 'GovermentID1',
            'GovermentID_2' => 'GovermentID2',
            'Reservation' => 'Reservation'
        ];

        foreach ($fields as $inputName => $columnName) {
            $uploadedFile = null;
            if (uploadImageOverview($inputName, $uploadedFile)) {
                $columnsToUpdate[$columnName] = $uploadedFile;
            }
        }

        // Only proceed if there's something to update
        if (!empty($columnsToUpdate)) {
            // Build SQL dynamically
            $setClause = "";
            $params = [];
            $types = "";

            foreach ($columnsToUpdate as $column => $value) {
                $setClause .= "$column = ?, ";
                $params[] = $value;
                $types .= "s"; // All values are strings
            }
            $setClause = rtrim($setClause, ", ");
            $params[] = $SelectedID;
            $types .= "i"; // UserID is an integer

            $sql = "UPDATE pending SET $setClause WHERE PendingID = ?";

            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, $types, ...$params);

                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Successfully Updated.',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            history.back();
                        });
                    </script>";
                } else {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Database update failed.',
                            showConfirmButton: true
                        });
                    </script>";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'SQL preparation failed.',
                        showConfirmButton: true
                    });
                </script>";
            }
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'info',
                    title: 'No files uploaded.',
                    showConfirmButton: true
                });
            </script>";
        }
    }
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


