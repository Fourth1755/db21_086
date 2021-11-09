<?php
    class Total{
        public static function getAll(){
            $totallist=[];
            require("connection_connect.php");
            $sql="SELECT Necessities.HomeIsolation_ID,Necessities.Necessities_ID,ItemList_Quantity,Item_ID,Item_Name 
            FROM Necessities LEFT JOIN ItemList ON Necessities.Necessities_ID=ItemList.Necessities_ID 
            NATURAL JOIN Item ORDER BY  Necessities.HomeIsolation_ID";
            $result=$conn->query($sql);
            require("connection_close.php");
            return $totallist;
        }
    }
?>