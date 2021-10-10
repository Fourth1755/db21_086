<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Video Call</title>
</head>
<body >

<div class="container">
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand">Video Call</a>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="videocall">
      <button class="btn btn-outline-success" type="submit" value="search" name="action">Search</button>
    </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>ID</td><td>Date</td><td>Color</td><td>Symptom</td><td>Homeisolation ID</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($videocall_list as $videocall){
            echo "<tr><td>$videocall->id</td>
                <td>$videocall->date</td>
                <td>$videocall->color</td>
                <td>$videocall->symptom</td>
                <td>$videocall->homeisolationID</td>
                ";?>
                <td><a type="button" class="btn btn-primary"href=?controller=videocall&action=updateForm&<?php echo "videocallID=$videocall->id";?>><i class="material-icons">build</i></a></td>
                <td><a class="btn btn-danger"href=?controller=videocall&action=deleteConfirm&<?php echo "videocallID=$videocall->id";?>><i class="material-icons">delete</i></a></td>
                </tr>
            <?php
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=videocall&action=newVideocall>Add new</a>
    <br>
    <br>
    <br>
    </div>
</body>
</html>