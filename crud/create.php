<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <?php //require_once 'components/boot.php'?>
    <title>Raum hinzufügen</title>
       
    </head>
    <body>
        <fieldset>
            
        <legend class='h2'> Add Product</legend>
           
        <form action="../actions/a_create.php" method="post" enctype= "multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Room capacity</th>
                    <td><input  class ='form-control' type="text" name="capacity" placeholder ="Room Capacity"/></td>
                </tr>   
                <tr>
                    <th>Room size</th>
                    <td><input class='form-control' type="number" name="size" placeholder ="Room size" step="any"/></td>
                </tr>
                <tr>
                    <th>Picture</th >
                    <td><input class='form-control' type="file" name="picture"/></td>
                </tr>
                <tr>
                    <td><button class ='btn btn-success' type= "submit">Insert Room</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
        </fieldset>
    </body>
</html>