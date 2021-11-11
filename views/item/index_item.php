<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .grid{
        margin: 60px;
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 30px;
        align-items: center;
    }
    .grid article{
        background-color: #eee5e9;
        border: none;
        box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
        border-radius: 20px;
        text-align: center;
        width: 250px;
        height: 400px;
        transition:transform .3s;
    }
    .grid article:hover{
        transform: translateY(5px);
        box-shadow:  2px 2px 26px 0px rgba(0,0,0,0.3);
    }
    .grid article img{
        width: 100%;
        min-height: 200px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    .text{
        padding: 0 20px 20px;
    }
    .text h3{
        text-transform: uppercase;
    }
    .text button{
        background: #ef6f6c;
        border-radius: 20px;
        border: none;
        color: #fff;
        padding: 10px;
        width: 100%;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
    }
    @media(max-width:768px){
        .grid{
            grid-template-columns: repeat(2,1fr);
        }
    }
    @media(max-width:500px){
        .grid{
            grid-template-columns: repeat(1,1fr);
        }
        .grid article{
            text-align: center;
            
        }
    }
    </style>
    <title>Item</title>
</head>
<body >

<div class="container">
    <nav class="navbar navbar-dark"style="background-color:Gray">
    <div class="container-fluid">
    <a class="navbar-brand">Item</a>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="item">
      <button class="btn btn-success" type="submit" value="search" name="action">Search</button>
    </form>
    </div>
    </nav>
        <div class ="container">
          <main class="grid">
          <?php
            foreach($item_list as $item){?>
              <article>
                  <img <?php echo "src= $item->image";?>>
                  <div class="text">
                      <h3><?php echo $item->name?></h3>
                      <p><?php echo $item->detail?></p>
                      <a type="button" class="btn btn-primary"href=?controller=item&action=updateForm&<?php echo "id=$item->id";?>><i class="material-icons">build</i></a>
                      <a class="btn btn-danger"href=?controller=item&action=deleteConfirm&<?php echo "itemID=$item->id";?>><i class="material-icons">delete</i></a>
                    </div>
                <?php echo"
                </article>";
            } ?>
          </main>
      </div>
    <a class= "btn btn-success" href=?controller=item&action=newItem>Add new</a>
    <br>
    <br>
    <br>
    </div>
</body>
</html>
