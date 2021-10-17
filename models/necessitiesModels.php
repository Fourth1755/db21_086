<?php
    class Necessities{
        public $id;
        public $date;
        public $homeisolationID;
        public function __construct($id,$date,$homeisolationID){
            $this->id=$id;
            $this->date=$date;
            $this->homeisolationID=$homeisolationID;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT * FROM Necessities WHERE Necessities_ID='$id'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row['Necessities_ID'];
            $date=$my_row['Necessities_Date'];
            $homeisolationID=$my_row["HomeIsolation_ID"];
            require("connection_close.php");
            return new Necessities($id,$date,$homeisolationID);
        }
        public static function getAll(){
            $necessitiesList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Necessities ";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $id=$my_row['Necessities_ID'];
                $date=$my_row['Necessities_Date'];
                $homeisolationID=$my_row["HomeIsolation_ID"];
                $necessitiesList[]=new Necessities($id,$date,$homeisolationID);
            }
            require("connection_close.php");
            return $necessitiesList;
        }
    }

?>