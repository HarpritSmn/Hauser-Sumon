<?php
require_once '../inc/db.inc.php';
require_once 'file_upload.php';

if ($_POST) {  
        $capacity = $_POST['capacity'];
        $size = $_POST['size'];
        $uploadError = '';
        //this function exists in the service file upload.
        $picture = file_upload($_FILES['picture']);  
 
        $sql = "INSERT INTO rooms (capacity, size, picture) VALUES ('$capacity', $size, '$picture->fileName')";

        if ($conn->query($sql) === true ) {
            $class = "success";
            $message = "The entry below was successfully created <br>
                <table class='table w-50'><tr>
                <td> $capacity </td>
                <td> $size </td>
                </tr></table><hr>";
            $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
        } else {
            $class = "danger";
            $message = "Error while creating record. Try again: <br>" . $conn->error;
            $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
        }

        $conn->close();
    
    } else {

    header("location: ../error.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta  charset="UTF-8">
<title>Update</title>
<?php //require_once '../components/boot.php' ?> 
</head>
<body>
    <div class="container">
        <div class="mt-3 mb-3" >
            <h1>Create request response</h1>
        </div>

        <div class="alert alert-<?=$class;?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../crud/index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
        </div>
</body>
</html>