<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Itemlist</title>
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
        <h1>Add new Itemlist</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Item ID
            <select name="itemID" class="form-select" aria-label="Default select example">
            <option selected disabled hidden>Open this select Item</option>
                <?php
                    foreach($item_list as $item){
                        echo"<option value=$item->id>$item->name</option>";
                    }    
                ?>
            </select>
        </label>
    </div>    
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Necessities
            <select name="necessitiesID" class="form-select" aria-label="Default select example">
            <option selected disabled hidden>Open this select Necessities</option>
                <?php
                    foreach($necessities_list as $nes){
                        echo"<option value=$nes->id>$nes->fname วันที่ $nes->date</option>";
                    }    
                ?>
            </select>
        </label>
    </div>
    
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity" placeholder="ItemList_Quantity">
    </div>
    <br>
    <input type="hidden" name="controller" value="itemlist" class="form-control">
    <a class= "btn btn-light" href=?controller=itemlist&action=index>Back</a>
    <button type="submit" class="btn btn-success" name="action" value="addItemlist">Save</button>
    </form>
    </div>
</body>
</html>