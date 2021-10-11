<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Videocall</title>
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
        <h1>Add new Videocall</h1>
        <form name="myForm" onsubmit="return validateForm()" method="get" required action="" style="width: 40%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" placeholder="VideoCall_Date">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Color
            <select name="color" class="form-select" aria-label="Default select example">
                <option selected disabled hidden>Open this select Color</option>
                <option value="เขียว">เขียว</option>
                <option value="เหลือง">เหลือง</option>
                <option value="แดง">แดง</option>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Symptom</label>
        <input type="text" class="form-control" name= "symptom" placeholder="VideoCall_Symptom">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">HomeIsolation
            <select name="homeisolationID" class="form-select" aria-label="Default select example">
            <option selected disabled hidden>Open this select HomeIsolation</option>
                <?php
                    foreach($homeisolation_list as $hom){
                        echo"<option value=$hom->id>$hom->id</option>";
                    }    
                ?>
            </select>
        </label>
    </div>
    <br>
    <input type="hidden" name="controller" value="videocall" class="form-control">
    <a class= "btn btn-light" href=?controller=videocall&action=index>Back</a>
    <button type="submit" class="btn btn-success" name="action" value="addVideocall">Save</button>
    </form>
    </div>
</body>
</html>