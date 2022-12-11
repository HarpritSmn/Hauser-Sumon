<?php
require_once '../inc/db.inc.php';
$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn ,$sql);
$tbody=''; //this variable will hold the body for the table

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $tbody .= 
        
        "<tr>
            <td><img class='img-thumbnail' src='res/img/pictures/" .$row['picture']."'</td>
            <td>" .$row['capacity']."</td>
            <td>" .$row['size']."</td>
            <td><a href='update.php?id=" .$row['room_id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['room_id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
        </tr>";
    };
    } else {
    $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div class="manageProduct w-75 mt-3" >
        <div class='mb-3'>
            <a href= "create.php" ><button class='btn btn-primary'type = "button" >Add product</button></a>
        </div>
           
        <p class='h2'>Rooms</p>

        <table class='table table-striped'>
            <thead class='table-success' >
                <tr>
                    <th>Picture</th>
                    <th>Capacity</th>
                    <th>priceSize</th>
                    <th>Action</th>
                </tr>
            </thead>
               
            <tbody>
                <?= $tbody;?>
            </tbody>
        </table>
    </div>
</body>
</html>
