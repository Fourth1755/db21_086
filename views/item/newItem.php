<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new order</title>
    <script>
        function validateForm(){
            var x = document.forms["myForm"]["name"].value;
            if (x == "" || x == null) {
                alert("Name must be filled out");
                return false;
            }
            var x = document.forms["myForm"]["detail"].value;
            if (x == "" || x == null) {
                alert("Detail must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
    
    <div class="container">
        <h1>Add new item</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Item</label>
        <input type="text" class="form-control" name="name" placeholder="Item_Name">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Detail</label>
        <input type="text" class="form-control" name= "detail" placeholder="Item_Detail">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Image</label>
        <input type="url" class="form-control" name= "image" placeholder="https://example.com" pattern="https://.*" size="30"
       required>
    </div>
    <br>
    
    <input type="hidden" name="controller" value="item" class="form-control">
    <a class= "btn btn-light" href=?controller=item&action=index>Back</a>
    <button type="submit" class="btn btn-success" name="action" value="addItem">Save</button>
    </form>
    </div>
</body>
</html>