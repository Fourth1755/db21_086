<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update order</title>
</head>
<body>
    <div class="container">
        <h1>Update order</h1>
        <form method="get" action="" style="width: 40%;">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">ID</label>
        <input type="text" class="form-control" name= "itemID"  value="<?php echo $item->id;?>" placeholder="Item_ID"/> 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Item</label>
        <input type="text" class="form-control" name= "name" value="<?php echo $item->name;?>" placeholder="Item_Name"/>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Detail</label>
        <input type="text" class="form-control" name="detail" value="<?php echo $item->detail;?>" placeholder="Item_Detail"/>
    </div>
    <br>
    <input type="hidden" name="controller" value="item" class="form-control">
    <button type="submit" class="btn btn" name="action" value="index">Back</button>
    <button type="submit" class="btn btn-success" name="action" value="updateItem">Update</button>
    </form>
    </div>
</body>
</html>