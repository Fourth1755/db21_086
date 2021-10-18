<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Itemlist</title>
</head>
<body >

<div class="container">
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand">Itemlist</a>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="itemlist">
      <button class="btn btn-outline-success" type="submit" value="search" name="action">Search</button>
    </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>ID</td><td>Item ID</td><td>Necessities ID</td><td>Quantity</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($itemlist_list as $itemlist){
            echo "<tr><td>$itemlist->id</td>
                <td>$itemlist->itemID</td>
                <td>$itemlist->necessitiesID</td>
                <td>$itemlist->quantity</td>
                ";?>
                <td><a type="button" class="btn btn-primary"href=?controller=itemlist&action=updateForm&<?php echo "itemlistID=$itemlist->id";?>><i class="material-icons">build</i></a></td>
                <td><a class="btn btn-danger"href=?controller=itemlist&action=deleteConfirm&<?php echo "itemlistID=$itemlist->id";?>><i class="material-icons">delete</i></a></td>
                </tr>
            <?php
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=itemlist&action=newItemlist>Add new</a>
    <br>
    <br>
    <br>
    </div>
</body>
</html>