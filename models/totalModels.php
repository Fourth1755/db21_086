<?php
    class Total{
        public $fname;
        public $lname;
        public $homeisolationID;
        public $date;
        public $necessitiesID;
        public $itemName;
        public $quantity;
        public function __construct($fname,$lname,$homeisolationID,$date,$necessitiesID,$itemName,$quantity){
            $this->fname=$fname;
            $this->lname=$lname;
            $this->homeisolationID=$homeisolationID;
            $this->date=$date;
            $this->necessitiesID=$necessitiesID;
            $this->itemName=$itemName;
            $this->quantity=$quantity;
        }
        public static function getAll(){
            $totallist=[];
            require("connection_connect.php");
            $sql="SELECT FName,LName,Necessities.HomeIsolation_ID AS HomeIsolation_ID,Necessities_Date,Necessities.Necessities_ID AS Necessities_ID,Item_Name,ItemList_Quantity
            FROM Necessities LEFT JOIN HomeIsolation ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card LEFT JOIN ItemList ON Necessities.Necessities_ID=ItemList.Necessities_ID 
            NATURAL JOIN Item ORDER BY Necessities.HomeIsolation_ID,Necessities_Date";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $fname=$my_row['FName'];
                $lname=$my_row['LName'];
                $homeisolationID=$my_row["HomeIsolation_ID"];
                $date=$my_row['Necessities_Date'];
                $necessitiesID=$my_row['Necessities_ID'];
                $itemName=$my_row['Item_Name'];
                $quantity=$my_row['ItemList_Quantity'];
                $totallist[]=new Total($fname,$lname,$homeisolationID,$date,$necessitiesID,$itemName,$quantity);
            }
            require("connection_close.php");
            return $totallist;
        }
        public static function search($key){
            $totallist=[];
            require("connection_connect.php");
            $sql="SELECT FName,LName,Necessities.HomeIsolation_ID AS HomeIsolation_ID,Necessities_Date,Necessities.Necessities_ID AS Necessities_ID,Item_Name,ItemList_Quantity
            FROM Necessities LEFT JOIN HomeIsolation ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card LEFT JOIN ItemList ON Necessities.Necessities_ID=ItemList.Necessities_ID 
            NATURAL JOIN Item WHERE (FName LIKE '%$key%' OR LName LIKE '%$key%' OR Necessities.HomeIsolation_ID LIKE '%$key%'
            OR Necessities_Date LIKE '%$key%' OR Necessities.Necessities_ID LIKE '%$key%' OR Item_Name LIKE '%$key%' ItemList_Quantity LIKE '%$key%')";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc()){
                $fname=$my_row['FName'];
                $lname=$my_row['LName'];
                $homeisolationID=$my_row["HomeIsolation_ID"];
                $date=$my_row['Necessities_Date'];
                $necessitiesID=$my_row['Necessities_ID'];
                $itemName=$my_row['Item_Name'];
                $quantity=$my_row['ItemList_Quantity'];
                $totallist[]=new Total($fname,$lname,$homeisolationID,$date,$necessitiesID,$itemName,$quantity);
            }
            require("connection_close.php");
            return $totallist;
        }
    }
?>