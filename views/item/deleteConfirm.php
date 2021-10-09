<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Item</title>
</head>
<body>
    <div class="container">
    <h1>Delete Item</h1>
    <table class="table">
        <h4>Are you sure to delete this Item</h4>
        <tr><td>ID</td><td>Item</td><td>Detail</td>
        </tr>
        <?php
            echo "<tr><td>$item->id</td>
                <td>$item->name</td>
                <td>$item->detail</td>
                </table>";
        ?>
    <form method="get" action="" style="width: 40%;">
        <input type="hidden" name="controller" value="item"/>
        <input type="hidden" name="itemID" value="<?php echo $order->id?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>
</body>
</html>