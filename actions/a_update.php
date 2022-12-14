<?php
require_once '../inc/db.inc.php';
require_once  'file_upload.php';

if ($_POST) {    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    //variable for upload pictures errors is initialized
    $uploadError = '';

    $picture = file_upload($_FILES['picture']);//file_upload() called  
    if ($picture->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");          
        $sql = "UPDATE products SET name = '$name', price = $price, picture = '$picture->fileName' WHERE id = {$id}";
    }else{
        $sql = "UPDATE products SET name = '$name', price = $price WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    $conn->close();    
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta  charset="UTF-8">
        <title>Update Room</title> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3" >
                <h1>Update request response</h1>
            </div>
            
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>' ><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
       </div >
   </body>
</html>