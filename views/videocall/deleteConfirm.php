<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Videocall</title>
</head>
<body>
    <div class="container">
    <h1>Delete Videocall</h1>
    <table class="table">
        <h4>Are you sure to delete this Videocall</h4>
        <tr><td>ID</td><td>Date</td><td>Color</td><td>Symptom</td><td>Homeisolation ID</td>
        </tr>
        <?php
            echo "<tr><td>$videocall->id</td>
                <td>$videocall->date</td>
                <td>$videocall->color</td>
                <td>$videocall->symptom</td>
                <td>$videocall->homeisolationID</td>
                </table>";
        ?>
    <form method="get" action="" style="width: 40%;">
        <input type="hidden" name="controller" value="videocall"/>
        <input type="hidden" name="videocallID" value="<?php echo $videocall->id?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>
</body>
</html>