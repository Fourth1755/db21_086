<div style="text-align: center;">
<?php
    //เชื่อมต่อ server
    $severname = "localhost";
    $username = "db21_080";
    $password ="db21_080";
    $dbname = "db21_080";
    $conn = mysqli_connect($severname,$username,$password);
    mysqli_set_charset($conn, "utf8");
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
        echo " Successfully connected to server ";
    }
    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }
    else{
        echo " Successfully connected to databse ";
    }
?>
</div>
