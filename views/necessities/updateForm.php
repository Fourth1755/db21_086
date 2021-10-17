<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Necessities</title>
    <script>
        function validateForm(){
            var x = document.forms["myForm"]["date"].value;
            if (x == "" || x == null) {
                alert("Date must be filled out");
                return false;
            }
            var x = document.forms["myForm"]["homeisolationID"].value;
            if (x == "" || x == null) {
                alert("Homeisolation must be filled out");
                return false;
            }
        }
        
    </script>
</head>
<body>
<div class="container">
        <h1>Update Necessities</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%; ">
        <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">ID</label>
        <input type="text" class="form-control" name="id" value="<?php echo $necessities->id;?>" placeholder="Necessities_ID">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" value="<?php echo $necessities->date;?>" placeholder="Necessities_Date">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">HomeIsolation
            <select name="homeisolationID" class="form-select" aria-label="Default select example">
                <?php
                    if($necessities->homeisolationID==NULL){
                        echo "<option selected disabled hidden>Open this select HomeIsolation</option>";
                    }
                    foreach($homeisolation_list as $hom){
                        echo"<option value=$hom->id";
                            if($hom->id==$necessities->homeisolationID){
                                    echo " selected='selected'";
                                }
                            echo">$hom->fname</option>";
                        }
                ?>
            </select>
        </label>
    </div>
    <br>
    <input type="hidden" name="controller" value="necessities" class="form-control">
    <a class= "btn btn-light" href=?controller=necessities&action=index>Back</a>
    <button type="submit" class="btn btn-success" name="action" value="updateNecessities">Update</button>
    </form>
    </div>
</body>
</html>