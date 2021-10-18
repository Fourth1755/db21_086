<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Itemlist</title>
</head>
<body>
    <div class="container">
    <h1>Delete Itemlist</h1>
    <table class="table">
        <h4>Are you sure to delete this Itemlist</h4>
        <tr><td>ID</td><td>Item ID</td><td>Item Name</td><td>Necessities ID</td><td>Name</td><td>Quantity</td>
        </tr>
        <?php
            echo "<tr><td>$itemlist->id</td>
                <td>$itemlist->itemID</td>
                <td>$itemlist->itemName</td>
                <td>$itemlist->necessitiesID</td>
                <td>$itemlist->fname</td>
                <td>$itemlist->quantity</td>
                </table>";
        ?>
    <form method="get" action="" style="width: 40%;">
        <input type="hidden" name="controller" value="itemlist"/>
        <input type="hidden" name="itemlistID" value="<?php echo $itemlist->id?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>
</body>
</html>