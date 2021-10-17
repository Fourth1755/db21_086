<?php
    class Necessities{
        public $id;
        public $date;
        public $homeisolationID;
        public $fname;
        public $lname;
        public $address;
        public function __construct($id,$date,$homeisolationID,$fname,$lname,$address){
            $this->id=$id;
            $this->date=$date;
            $this->homeisolationID=$homeisolationID;
            $this->fname=$fname;
            $this->lname=$lname;
            $this->address=$address;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT * FROM Necessities LEFT JOIN HomeIsolation ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card WHERE Necessities_ID='$id'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row['Necessities_ID'];
            $date=$my_row['Necessities_Date'];
            $homeisolationID=$my_row["HomeIsolation_ID"];
            $fname=$my_row["FName"];
            $lname=$my_row["LName"];
            $address=$my_row["Address"];
            require("connection_close.php");
            return new Necessities($id,$date,$homeisolationID,$fname,$lname,$address);
        }
        public static function getAll(){
            $necessitiesList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Necessities LEFT JOIN HomeIsolation ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $id=$my_row['Necessities_ID'];
                $date=$my_row['Necessities_Date'];
                $homeisolationID=$my_row["HomeIsolation_ID"];
                $fname=$my_row["FName"];
                $lname=$my_row["LName"];
                $address=$my_row["Address"];
                $necessitiesList[]=new Necessities($id,$date,$homeisolationID,$fname,$lname,$address);
            }
            require("connection_close.php");
            return $necessitiesList;
        }
        public static function add($date,$homeisolationID){
            require("connection_connect.php");
            if($homeisolationID!=""){
                $homeisolationID="'".$homeisolationID."'";
            }
            else{
                $homeisolationID="NULL";
            }
            $sql ="INSERT INTO Necessities (Necessities_Date,HomeIsolation_ID)
            VALUES('$date',$homeisolationID)";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM Necessities WHERE Necessities_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
    }

?>