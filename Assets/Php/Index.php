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
        
        $stmt = "INSERT INTO Pending(Lastname, Firstname, Email, Phone, Message, Address, Selected_Property, Category , Receipt) 
        VALUES('$Lastname','$Firstname', '$Email', '$Phone', '$Message','$Address', '$SelectedProperty', '$Category','$newFileName') ";
        mysqli_query($conn, $stmt); 

        echo "<script>
        alert('Your inquiry has been successfully submitted.');
        setTimeout(function(){
            window.location.href = '../../Login.php';
            }, 1500); 
            </script>";   
        }
/***********************************************
    ADDING SIGNUP
    ************************************************/
    function Signup($conn){
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $Role = "User";
    // SQL HERE
        $query = "

        INSERT INTO User(Firstname, Lastname, Email, Phone, Address, Password, Role)
        VALUES('$Firstname','$Lastname','$Email','$Phone','$Address','$Password','$Role');
        ";
        mysqli_query($conn,$query);

        echo "<script>
        alert('Your account has been created successfully');
        setTimeout(function(){
            window.location.href = '../../index.php';
            }, 500); 
            </script>";        
        }


/***********************************************
    FILTER: LOGIN
    ************************************************/
function LoginUser($conn) {
    // Validate and sanitize email
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $Email = $conn->real_escape_string($_POST['email']);
        $Password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM User WHERE Email = ?");
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (password_verify($Password, $row['Password'])) {
                    $_SESSION['Firstname'] = $row['Firstname'];
                    $_SESSION['Lastname'] = $row['Lastname'];
                    $_SESSION['UserID'] = $row['UserID'];
                    echo "<script>
                        alert('Successfully Login');
                        setTimeout(function(){
                            window.location.href = '../../Login.php';
                        }, 500);
                    </script>";
                } else {
                    echo "<script>
                        alert('Incorrect Password! Please try again.');
                        setTimeout(function(){
                            window.location.href = '../../Index.php';
                        }, 500);
                    </script>";
                }
            }
        } else {
            echo "<script>
                alert('Email not found. Please try again.');
                setTimeout(function(){
                    window.location.href = '../../Index.php';
                }, 500);
            </script>";
        }
        $stmt->close();
     } else {
        echo "<script>
            alert('Invalid Email! Please try again.');
            setTimeout(function(){
                window.location.href = '../../Index.php';
            }, 500);
        </script>";
    }
}

/***********************************************
 # TESTIMONIAL
************************************************/
function Testimonial($conn){
    $Name = $_POST['Name'];
    $Rating = $_POST['rating'];
    $Message = $_POST['Message'];

    $sql = "
    INSERT INTO Message(sender, Rate, Message) 
    VALUES('$Name', $Rating, '$Message');
    ";
    mysqli_query($conn,$sql);

    echo "<script>
    alert('Submitted successfully');
    setTimeout(function(){
        window.location.href = '../../index.php';
        }, 500); 
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