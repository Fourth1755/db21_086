<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update order</title>
    <script>
        function validateForm(){
            var x = document.forms["myForm"]["itemID"].value;
            if (x == "" || x == null) {
                alert("Item must be filled out");
                return false;
            }
            var x = document.forms["myForm"]["necessitiesID"].value;
            if (x == "" || x == null) {
                alert("Necessities must be filled out");
                return false;
            }
            var x = document.forms["myForm"]["quantity"].value;
            if (x == "" || x == null) {
                alert("Quantity must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Update order</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%;">
        <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">HomeIsolation
            <select name="itemID" class="form-select" aria-label="Default select example">
                <?php
                    if($itemlist->itemID==NULL){
                        echo "<option selected disabled hidden>Open this select Item</option>";
                    }
                    foreach($item_list as $item){
                        echo"<option value=$item->id";
                            if($item->id==$itemlist->itemID){
                                    echo " selected='selected'";
                                }
                            echo">$item->name</option>";
                        }
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Necessities
            <select name="necessitiesID" class="form-select" aria-label="Default select example">
                <?php
                    if($itemlist->necessitiesID==NULL){
                        echo "<option selected disabled hidden>Open this select Necessities</option>";
                    }
                    foreach($necessities_list as $nes){
                        echo"<option value=$nes->id";
                            if($nes->id==$itemlist->necessitiesID){
                                    echo " selected='selected'";
                                }
                            echo">$nes->fname</option>";
                        }
                ?>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity" value="<?php echo $itemlist->quantity;?>" placeholder="ItemList_Quantity">
    </div>
    <br>
    <input type="hidden" name="controller" value="itemlist" class="form-control">
    <a class= "btn btn-light" href=?controller=itemlist&action=index>Back</a>
    <button type="submit" class="btn btn-success" name="action" value="updateItemlist">Update</button>
    </form>
    </div>
</body>
</html>