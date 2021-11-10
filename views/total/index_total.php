<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Item</title>
</head>
<body >

<div class="container">
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand">Total</a>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="total">
      <button class="btn btn-success" type="submit" value="search" name="action">Search</button>
    </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>Name</td><td>Lastname</td><td>Homeisolation ID</td><td>Date</td><td>Necessities ID</td><td>Item Name</td><td>Quantity</td>
        </tr>
        <?php
            $i=0;
            foreach($total_list as $tot){
            echo "<tr>";
            if($i==0){
                echo "<td>$tot->fname</td>
                <td>$tot->lname</td>";
            }
            else if($tot[$i]->fname!=$tot[$i-1]->fname){
                echo "<td>$tot->fname</td>
                <td>$tot->lname</td>";
            }
            else{
                echo "<td></td>
                <td></td>";
            }
            $i++;
            echo "<td>$tot->homeisolationID</td>
            <td>$tot->date</td>
            <td>$tot->necessitiesID</td>
            <td>$tot->itemName</td>
            <td>$tot->quantity</td>
                ";?>
                </tr>
            <?php
            }    
            echo "</table>";
        ?>
    <br>
    <br>
    <br>
    </div>
</body>
</html>
