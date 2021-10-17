<?php
    class Videocall{
        public $id;
        public $date;
        public $color;
        public $symptom;
        public $homeisolationID;
        public function __construct($id,$date,$color,$symptom,$homeisolationID){
            $this->id=$id;
            $this->date=$date;
            $this->color=$color;
            $this->symptom=$symptom;
            $this->homeisolationID=$homeisolationID;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT * FROM Videocall WHERE Videocall_ID='$id'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row["VideoCall_ID"];
            $date=$my_row["VideoCall_Date"];
            $color=$my_row["VideoCall_Color"];
            $symptom=$my_row["VideoCall_Symptom"];
            $homeisolationID=$my_row["HomeIsolation_ID"];
            require("connection_close.php");
            return new Videocall($id,$date,$color,$symptom,$homeisolationID);
        }
        public static function getAll(){
            $videocallList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Videocall";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["VideoCall_ID"];
                $date=$my_row["VideoCall_Date"];
                $color=$my_row["VideoCall_Color"];
                $symptom=$my_row["VideoCall_Symptom"];
                $homeisolationID=$my_row["HomeIsolation_ID"];
                $videocallList[]=new Videocall($id,$date,$color,$symptom,$homeisolationID);
            }
            require("connection_close.php");
            return $videocallList;
        }
        public static function add($date,$color,$symptom,$homeisolationID){
            require("connection_connect.php");
            if($homeisolationID!=""){
                $homeisolationID="'".$homeisolationID."'";
            }
            else{
                $homeisolationID="NULL";
            }
            $sql ="INSERT INTO Videocall (VideoCall_Date,VideoCall_Color,VideoCall_Symptom,HomeIsolation_ID)
            VALUES('$date','$color','$symptom',$homeisolationID)";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM Videocall WHERE Videocall_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
        public static function search($key){
            $videocallList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Videocall WHERE (Videocall_ID LIKE '%$key%' OR VideoCall_Date LIKE '%$key%' OR VideoCall_Color LIKE '%$key%'
            OR VideoCall_Symptom LIKE '%$key%')";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["VideoCall_ID"];
                $date=$my_row["VideoCall_Date"];
                $color=$my_row["VideoCall_Color"];
                $symptom=$my_row["VideoCall_Symptom"];
                $homeisolationID=$my_row["HomeIsolation_ID"];
                $videocallList[]=new Videocall($id,$date,$color,$symptom,$homeisolationID);
            }
            require("connection_close.php");
            return $videocallList;
        }
        public static function update($id,$date,$color,$symptom,$homeisolationID){
            require("connection_connect.php");
            if($homeisolationID!=""){
                $homeisolationID="'".$homeisolationID."'";
            }
            else{
                $homeisolationID="NULL";
            }
            $sql="UPDATE Videocall SET Videocall_ID='$id',Videocall_Date='$date',Videocall_Color='$color',VideoCall_Symptom='$symptom'
            ,HomeIsolation_ID=$homeisolationID WHERE Videocall_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }
    }
?>