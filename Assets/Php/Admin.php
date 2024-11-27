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
/***********************************************
FOR ADDING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
if(isset($_POST['Submit'])){
	if($_POST['Submit'] == "User"){
		AddUser($conn);
	}elseif($_POST['Submit'] == "Admin"){
		AddManagement($conn);
	}else{
        AddProperty($conn);
    }
 
}

/***********************************************
FOR DELETING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
if(isset($_GET['deleteid'])){
    DeleteArchive($conn);
}
if(isset($_GET['DeleteID'])){
    DeleteMessage($conn);
}
if(isset($_GET['SelectedID'])){
    Sales($conn);
}
/***********************************************
FOR ARCHIVING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
if(isset($_GET['archiveID']) && isset($_GET['value'])){
    $value = $_GET['value'];
    if($value == "Admin" or $value == "Staff"){
        ArchiveManagement($conn);
     }elseif($value == "Pending"){
        ArchivePending($conn);
     }elseif($value == "User"){
        ArchiveUser($conn);
     }elseif($value == "Property"){
        ArchiveProperty($conn);
     }else{
        echo "Cannot found!";
     }
}
if (isset($_GET['restoreid']) && isset($_GET['value'])) {
    $value = $_GET['value'];
    if($value == "User"){
        restoreUser($conn);
    }elseif($value == "Staff" or $value == "Admin"){
        restoreManagement($conn);
    }elseif($value == "Property"){
        restoreProperty($conn);
    }
}

/***********************************************
FOR SORTING
************************************************/

/***********************************************
FUNCTION FOR ADDING
************************************************/
function AddUser($conn){
        $Lastname = $_POST['Lastname'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        $Role = "User";

        $stmt = "INSERT INTO user(Firstname, Lastname, Email, Phone, Address, Password, Role)VALUES('$Firstname','$Lastname','$Email','$Phone','$Address', '$Password','$Role')";

         mysqli_query($conn, $stmt); 

         echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Added Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Users.php';
                });
                </script>";          
}	

function AddManagement($conn){
        $Lastname = $_POST['Lastname'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        $Role = $_POST['Role'];
        $Hash = password_hash($Password, PASSWORD_DEFAULT);
      	
        $stmt = "
        INSERT INTO management(Lastname, Firstname, Email, Phone, Address, Password, Role)
        VALUES('$Lastname','$Firstname','$Email', '$Phone', '$Address', '$Hash','$Role')";

         mysqli_query($conn, $stmt); 
  

     echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Added Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Management.php';
                });
                </script>";        
}

/***********************************************
   UPLOAD IMAGE  
************************************************/
function uploadImage($inputName, &$newFileName) {
    $file = $_FILES[$inputName]["name"];
    $tempFile = $_FILES[$inputName]["tmp_name"];
    $newFileName = uniqid() . "-" .$file;
    $uploadPath = realpath('../../Images') . DIRECTORY_SEPARATOR . $newFileName;
    move_uploaded_file($tempFile, $uploadPath);
}   
function AddProperty($conn){
    //INPUT NAMES
    $Property = $_POST['Property'];
    $Price = $_POST['Price'];
    $Bedroom = $_POST['Bedroom'];
    $Bathroom = $_POST['Bathroom'];
    $Area = $_POST['Area'];
    $Block = $_POST['Block'];
    $Lot = $_POST['Lot'];
    $Phase = $_POST['Phase'];
    $VirtualTour = $_POST['VirtualTour'];
    $Message = $_POST['Message'];
    $Status = "Sale";
    $Role = "Property";
    
    // Usage
    uploadImage('Exterior', $Newfile_Exterior);
    uploadImage('Bedroom', $Newfile_Bedroom);  
    uploadImage('Livingroom', $Newfile_Livingroom);  
    uploadImage('Diningroom', $Newfile_Diningroom);  
    uploadImage('Bathroom', $Newfile_Bathroom);  

    $stmt = "
    INSERT INTO properties(Property, Description, Price, Bedrooms, Bathrooms, Lot,Block, Phase, Area_sqft, VirtualTour, Status, IExterior,IBedroom,IBathroom,IAttic,IDining,Role) 
    VALUES ('$Property', '$Message', '$Price', '$Bedroom', '$Bathroom','$Lot','$Block','$Phase', '$Area','$VirtualTour','$Status','$Newfile_Exterior','$Newfile_Bedroom','$Newfile_Livingroom','$Newfile_Diningroom','$Newfile_Bathroom','$Role')
    ";
    mysqli_query($conn,$stmt);

     echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Property Added Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Properties.php';
                });
                </script>";   
}

/***********************************************
FUNCTION FOR EDITING 
************************************************/

/***********************************************
FUNCTION FOR DELETING 
************************************************/ 
function DeleteArchive($conn){
    if(isset($_GET['deleteid'])){

        $ID = $_GET['deleteid'];

        $sql = "DELETE FROM archive WHERE ArchiveId = $ID";
        mysqli_query($conn, $sql);


     echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Record Successfully Deleted',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Archieve.php';
                });
                </script>";                        
    }
}
function DeleteMessage($conn){
    if(isset($_GET['DeleteID'])){

        $ID = $_GET['DeleteID'];

        $sql = "DELETE FROM message WHERE MessageID = $ID";
        mysqli_query($conn, $sql);
     echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Record Successfully Deleted',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Message.php';
                });
                </script>";           
    }
}
/***********************************************
FUNCTION FOR ARCHIVING 
************************************************/ 
function ArchiveManagement($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO Archive(Name, Description, Lastname, Firstname, Email, Phone, Address, Password)
            SELECT Lastname, Role, Lastname, Firstname, Email, Phone,Address,Password
            FROM management
            WHERE ManagementID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM management 
    WHERE ManagementID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from management: " . $stmtDelete->error);
    }
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Archive Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Archieve.php';
                });
                </script>";
  

    $stmtInsert->close(); 
    $stmtDelete->close(); 
}

function ArchiveProperty($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description, Property, Script, Price, Bedrooms, Bathrooms, Lot, Block, Phase, Area_sqft, Virtual, Status, IExterior, IBedroom, IBathroom, IAttic, IDining, Role)
            SELECT Property, Role, Property, Description, Price, Bedrooms, Bathrooms, Lot, Block, Phase, Area_sqft, VirtualTour, Status, IExterior, IBedroom, IBathroom, IAttic, IDining, Role
            FROM properties
            WHERE PropertyID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM properties 
    WHERE PropertyID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from management: " . $stmtDelete->error);
    }

    $Pendingquery = "
    DELETE FROM pending 
    WHERE PropertyID = ?
    ";
    
    $stmtPending = $conn->prepare($Pendingquery);
    $stmtPending->bind_param("i",$ID);

    if(!$stmtPending->execute()){
        throw new Exception("Error deleting record from management: " . $stmtDelete->error);
    }

        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Archive Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Archieve.php';
                });
                </script>";   

    $stmtInsert->close(); 
    $stmtDelete->close(); 
}

function ArchivePending($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description)
            SELECT Lastname, Category
            FROM pending
            WHERE PendingID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM pending 
    WHERE PendingID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from Pending: " . $stmtDelete->error);
    }
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Archive Successfully!',
            showConfirmButton: false,
            timer: 2000
            }).then(() => {
                window.location.href = '../../Admin-Pending.php';
                });
                </script>";
   

    $stmtInsert->close(); 
    $stmtDelete->close(); 
}

function ArchiveUser($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description, Lastname, Firstname, Email, Phone, Address, Password)
            SELECT Lastname, Role, Lastname, Firstname, Email, Phone,Address,Password
            FROM user
            WHERE UserID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM user 
    WHERE UserID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from User: " . $stmtDelete->error);
    }

        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Archive Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Archieve.php';
                });
                </script>";    

    $stmtInsert->close(); 
    $stmtDelete->close(); 
}
/***********************************************
    SECTION: RESTORE
************************************************/ 
function restoreManagement($conn) {
    $RestoreID = $_GET['restoreid'];
    
    try {
        // Insert into management table
        $Insert = "
        INSERT INTO management(Lastname, Firstname, Email, Phone, Address, Password, Role)
        SELECT Lastname, Firstname, Email, Phone, Address, Password, Description
        FROM archive
        WHERE ArchiveID = ? 
        ";
        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("i", $RestoreID);

        if (!$stmt->execute()) {
            throw new Exception("Error in restoring data: " . $stmt->error);
        }

        // Delete from archive table
        $delete = "
        DELETE FROM archive 
        WHERE ArchiveID = ?
        ";
        $stmtdel = $conn->prepare($delete);
        $stmtdel->bind_param("i", $RestoreID);

        if (!$stmtdel->execute()) {
            throw new Exception("Error deleting record from archive: " . $stmtdel->error);
        }

        // Success message
        echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Restore Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Management.php';
            });
        </script>    
        ";

    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    } finally {
        if (isset($stmt)) $stmt->close();
        if (isset($stmtdel)) $stmtdel->close();
    }
}
function restoreUser($conn) {
    $RestoreID = $_GET['restoreid'];
    
    try {
        // Insert into management table
        $Insert = "
        INSERT INTO user(Lastname, Firstname, Email, Phone, Address, Password, Role)
        SELECT Lastname, Firstname, Email, Phone, Address, Password, Description
        FROM archive
        WHERE ArchiveID = ? 
        ";
        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("i", $RestoreID);

        if (!$stmt->execute()) {
            throw new Exception("Error in restoring data: " . $stmt->error);
        }

        // Delete from archive table
        $delete = "
        DELETE FROM archive 
        WHERE ArchiveID = ?
        ";
        $stmtdel = $conn->prepare($delete);
        $stmtdel->bind_param("i", $RestoreID);

        if (!$stmtdel->execute()) {
            throw new Exception("Error deleting record from archive: " . $stmtdel->error);
        }

        // Success message
        echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Restore Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Users.php';
            });
        </script>    
        ";

    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    } finally {
        if (isset($stmt)) $stmt->close();
        if (isset($stmtdel)) $stmtdel->close();
    }
}
function restoreProperty($conn) {
    $RestoreID = $_GET['restoreid'];
    
    try {
        // Insert into management table
        $Insert = "
        INSERT INTO Properties(Property, Description, Price,Bedrooms,Bathrooms,Lot,Block,Phase,Area_sqft,VirtualTour, Status, IExterior, IBedroom, IBathroom, IAttic, IDining,Role)
        SELECT Property, Script, Price, Bedrooms, Bathrooms, Lot, Block, Phase, Area_sqft, Virtual, Status, IExterior, IBedroom, IBathroom, IAttic, IDining, Role
        FROM archive
        WHERE ArchiveID = ? 
        ";
        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("i", $RestoreID);

        if (!$stmt->execute()) {
            throw new Exception("Error in restoring data: " . $stmt->error);
        }

        // Delete from archive table
        $delete = "
        DELETE FROM archive 
        WHERE ArchiveID = ?
        ";
        $stmtdel = $conn->prepare($delete);
        $stmtdel->bind_param("i", $RestoreID);

        if (!$stmtdel->execute()) {
            throw new Exception("Error deleting record from archive: " . $stmtdel->error);
        }

        // Success message
        echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Restore Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-Properties.php';
            });
        </script>    
        ";

    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    } finally {
        if (isset($stmt)) $stmt->close();
        if (isset($stmtdel)) $stmtdel->close();
    }
}

/***********************************************
FUNCTION FOR INSERTING SELECTED PENDING
************************************************/ 
function Sales($conn) {
    $SelectedID = $_GET['SelectedID'];

    $InsertSale = " 
    INSERT INTO sales (Property, CurrentOwner)
    SELECT properties.Property, pending.Lastname
    FROM pending
    JOIN properties ON pending.PropertyID = properties.PropertyID
    WHERE PendingID = ?
    ";
    
    $stmt = $conn->prepare($InsertSale);
    $stmt->bind_param("i", $SelectedID);

    if (!$stmt->execute()) {
        throw new Exception("Error transferring to Sales log: " . $stmt->error);
    }
    
    $updateHouse = "
    UPDATE properties 
    INNER JOIN pending ON properties.PropertyID = pending.PropertyID
    SET properties.Status = ?
    WHERE pending.PendingID = ?";

    $stmtUpdate = $conn->prepare($updateHouse);
    $Update = "Purchased";
    $stmtUpdate->bind_param("si", $Update, $SelectedID);

    if(!$stmtUpdate->execute()){
        throw new Exception("Error updating record in Properties: " . $stmtUpdate->error);
    }


    $sqlDel = "
    DELETE FROM pending
    WHERE PendingID = ?
    ";

    $stmtDel = $conn->prepare($sqlDel);
    $stmtDel->bind_param("i",$SelectedID);
    if(!$stmtDel->execute()){
         throw new Exception("Error deleting record from Pending: " . $stmtDel->error);
    }
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Sold Successfully',
            showConfirmButton: false,
            timer: 1500
            }).then(() => {
                window.location.href = '../../Admin-SoldProperties.php';
                });
                </script>"; 
    
}
