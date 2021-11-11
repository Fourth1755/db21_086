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
    <nav class="navbar navbar-dark"style="background-color:Gray">
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
            $i=1;
            foreach($total_list as $tot){
            if($i==1){
                echo "<td>$tot->fname</td>
                <td>$tot->lname</td>
                <td>$tot->homeisolationID</td>";
                $name=$tot->fname;
                $i++;
            }
            else if($name==$tot->fname){
                echo "<td></td>
                <td></td>
                <td></td>";
            }
            else{
                echo "<td>$tot->fname</td>
                <td>$tot->lname</td>
                <td>$tot->homeisolationID</td>";
                $name=$tot->fname;
                $i++;
            }
            echo "
            <td>$tot->date</td>
            <td>$tot->necessitiesID</td>
            <td>$tot->itemName</td>
            <td>X$tot->quantity</td>
            </tr>";
            }    
            echo "</table>";?>
    <br>
    <br>
    <br>
    </div>
</body>
</html>
