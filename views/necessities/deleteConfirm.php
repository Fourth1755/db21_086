<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Necessities</title>
</head>
<body>
    <div class="container">
    <h1>Delete Necessities</h1>
    <table class="table">
        <h4>Are you sure to delete this Necessities</h4>
        <tr><td>ID</td><td>Date</td><td>Homeisolation ID</td><td>Name</td><td>LastName</td><td>Address</td>
        </tr>
        <?php
            echo "<tr><td>$necessities->id</td>
                <td>$necessities->date</td>
                <td>$necessities->homeisolationID</td>
                <td>$necessities->fname</td>
                <td>$necessities->lname</td>
                <td>$necessities->address</td>
                </table>";
        ?>
    <form method="get" action="" style="width: 40%;">
        <input type="hidden" name="controller" value="necessities"/>
        <input type="hidden" name="necessitiesID" value="<?php echo $necessities->id?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>
</body>
</html>