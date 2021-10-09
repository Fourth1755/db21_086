<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Order</title>
</head>
<body >
<div class="container">
        <table class="table">
        <tr><td>ID</td><td>Item</td><td>Item Detail</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($item_list as $item){
            echo "<tr><td>$item->id</td>
                <td>$item->name</td>
                <td>$item->detail</td>
                ";?>
                <td><a type="button" class="btn btn-primary"href=?controller=item&action=updateForm&<?php echo "itemID=$item->id";?>><i class="material-icons">build</i></a></td>
                <td><a class="btn btn-danger"href=?controller=item&action=deleteConfirm&<?php echo "itemID=$item->id";?>><i class="material-icons">delete</i></a></td>
                </tr>
            <?php
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=item&action=newItem>Add new</a>
    <br>
    <br>
    <br>
    </div>
</body>
</html>
