<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Videocall</title>
</head>
<body>
<div class="container">
        <h1>Add new Videocall</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" value="<?php echo $video->id;?>" placeholder="VideoCall_Date">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Color
            <select name="color" class="form-select" aria-label="Default select example">
                <?php
                    if($video->color==""){
                        echo "<option selected disabled hidden>Open this select Color</option>";
                    }
                    else{
                        echo "<option selected disabled hidden value=$video->color";
                        echo ">$video->color</option>";
                    }
                ?>
                <option value="เขียว">เขียว</option>
                <option value="เหลือง">เหลือง</option>
                <option value="แดง">แดง</option>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Symptom</label>
        <input type="text" class="form-control" name= "symptom" value="<?php echo $video->symptom;?>" placeholder="VideoCall_Symptom">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">HomeIsolation
            <select name="homeisolationID" class="form-select" aria-label="Default select example">
                <?php
                    if($video->homeisolationID==""){
                        echo "<option selected disabled hidden>Open this select HomeIsolation</option>";
                    }
                    else{
                        echo "<option selected disabled hidden value=$video->homeisolation>$video->homeisolation</option>";
                    }
                    foreach($homeisolation_list as $hom){
                        echo"<option value=$hom->id>$hom->id</option>";
                    }    
                ?>
            </select>
        </label>
    </div>
    <br>
    <input type="hidden" name="controller" value="videocall" class="form-control">
    <button type="submit" class="btn btn" name="action" value="index">Back</button>
    <button type="submit" class="btn btn-success" name="action" value="updateVideo">Update</button>
    </form>
    </div>
</body>
</html>