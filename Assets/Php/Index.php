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
        Login($conn);
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


        if (!empty($_FILES['Receipt']['name'])) {
            $file = $_FILES['Receipt']['name'];
            $tempFile = $_FILES['inputName']['tmp_name'];
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
            window.location.href = '../../index.php';
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
        $Password = $_POST['Password'];
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
    function Login($conn){
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        $query = "
        SELECT * 
        FROM Management
        WHERE Email = ?
        UNION
        SELECT * 
        FROM User
        WHERE Email = ?
        ";

        $stmt = $conn->prepare($query);
        $stmt -> bind_param("ss",$Email,$Email);
        $stmt -> execute();
        $result = $stmt -> get_result();

        if($result -> num_rows > 0){
         $row = $result->fetch_assoc();

         $Role = $row['Role'];
           // Verify password
         if ($row['Password'] === $Password){

            if($Role === 'Admin'){
               echo "<script>
               alert('Welcome, ".$row['Lastname']."! You have successfully logged in. ' );
               setTimeout(function(){
                window.location.href = '../../Account.php';
                }, 500); 
                </script>";   
            }elseif($Role === 'User'){

                $_SESSION['lastname'] = $row['Lastname'];
                $_SESSION['email'] = $row['Email'];

                echo "<script>
                alert('Welcome, ".$row['Lastname']." ! You have successfully logged in. ' );
                setTimeout(function(){
                    window.location.href = '../../Login.php';
                    }, 500); 
                    </script>";                
                }


            }else{
            // WRONG PASS
               echo "<script>
               alert('Wrong password' );
               setTimeout(function(){
                window.location.href = '../../index.php';
                }, 500); 
                </script>";
            }
        }else{
            // WRONG EMAIL
           echo "<script>
           alert('No user found with that email');
           setTimeout(function(){
            window.location.href = '../../index.php';
            }, 500); 
            </script>";
        }   
    }

/***********************************************
    GET THE HOUSE ID
    ************************************************/

    if(isset($_POST['PassID'])){
        $Holder = $_POST['IDHolder'];
        $_SESSION['Holder'] = $Holder;
        header("location: ../../HouseDetails.php" );
    }

?>