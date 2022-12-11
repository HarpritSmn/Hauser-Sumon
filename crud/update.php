<?php
require_once '../inc/db.inc.php';

if ($_GET['room_id']) {
    $id = $_GET['room_id'];
    $sql = "SELECT * FROM rooms_id WHERE id = {$id}";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $capacity = $data['capacity'];
        $size = $data['size'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    $conn->close();
} else {
    header("location: error.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Edit Room </title>
    </head>
    <body>
        <fieldset>
            <legend class='h2'> Update request <img class='img-thumbnail rounded-circle'  src='pictures/<?php echo $picture ?>' alt="<?php echo $capacity ?>"></legend >
            <form action ="actions/a_update.php"  method="post"  enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Capacity</th>
                        <td><input class ="form-control" type="text" name="capacity" placeholder ="Room Capacity" value="<?php echo $capacity ?>"/></td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td><input class="form-control" type="number" name="size" step="any" placeholder="size" value  ="<?php echo $size ?>"/></td>
                    </tr>
                    <tr>
                        <th>Picture</th >
                        <td><input class="form-control" type="file"  name="picture"/></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "room_id" value= "<?php echo $data['room_id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class ="btn btn-success" type = "submit">Save Changes</button></td>
                        <td><a href= "index.php" ><button class ="btn btn-warning" type ="button">Back </button></a ></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>