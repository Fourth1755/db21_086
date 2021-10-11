<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Videocall</title>
    <script>
        function validateForm(){
            var x = document.forms["myForm"]["date"].value;
            if (x == "" || x == null) {
                alert("Date must be filled out");
                return false;
            }
            var x = document.forms["myForm"]["color"].value;
            if (x == "" || x == null) {
                alert("Color must be filled out");
                return false;
            }
            var x = document.forms["myForm"]["symptom"].value;
            if (x == "" || x == null) {
                alert("Symptom must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
<div class="container">
        <h1>Update Videocall</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%; ">
        <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">ID</label>
        <input type="text" class="form-control" name="id" value="<?php echo $videocall->id;?>" placeholder="VideoCall_ID">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" value="<?php echo $videocall->date;?>" placeholder="VideoCall_Date">
    </div>
    <!-- <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Color</label>
        <input type="text" class="form-control" name="color" value="<?php //echo $videocall->color;?>" placeholder="VideoCall_Color">
    </div> -->
     <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Color
            <select name="color" class="form-select" aria-label="Default select example">
                
                <?php
                    // if($videocall->color==NULL){
                    //     echo "<option selected disabled hidden>Open this select Color</option>";
                    // }
                    // else{
                        echo "<option selected disabled hidden value=$videocall->color ";
                        echo ">$videocall->color</option>";
                    // }
                ?>
                <option value="เขียว">เขียว</option>
                <option value="เหลือง">เหลือง</option>
                <option value="แดง">แดง</option>
            </select>
        </label>
    </div>  
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Symptom</label>
        <input type="text" class="form-control" name= "symptom" value="<?php echo $videocall->symptom;?>" placeholder="VideoCall_Symptom">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">HomeIsolation
            <select name="homeisolationID" class="form-select" aria-label="Default select example">
                <?php
                    if($videocall->homeisolationID==NULL){
                        echo "<option selected disabled hidden>Open this select HomeIsolation</option>";
                    }
                    foreach($homeisolation_list as $hom){
                        echo"<option value=$hom->id";
                            if($hom->id==$videocall->homeisolationID){
                                    echo " selected='selected'";
                                }
                            echo">$hom->id</option>";
                        }
                ?>
            </select>
        </label>
    </div>
    <br>
    <input type="hidden" name="controller" value="videocall" class="form-control">
    <a class= "btn btn-light" href=?controller=videocall&action=index>Back</a>
    <button type="submit" class="btn btn-success" name="action" value="updateVideocall">Update</button>
    </form>
    </div>
</body>
</html>