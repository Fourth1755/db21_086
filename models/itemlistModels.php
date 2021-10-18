<?php
    class Itemlist{
        public $id;
        public $itemID;
        public $itemName;
        public $necessitiesID;
        public $fname;
        public $quantity;
        public function __construct($id,$itemID,$itemName,$necessitiesID,$fname,$quantity){
            $this->id=$id;
            $this->itemID=$itemID;
            $this->itemName=$itemName;
            $this->necessitiesID=$necessitiesID;
            $this->fname=$fname;
            $this->quantity=$quantity;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT ItemList_ID,Item.Item_ID,Item_Name,Necessities.Necessities_ID,Fname,ItemList_Quantity FROM ItemList 
            LEFT JOIN Necessities ON ItemList.Necessities_ID=Necessities.Necessities_ID LEFT JOIN HomeIsolation 
            ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card LEFT JOIN Item ON Item.Item_ID=ItemList.Item_ID 
            WHERE ItemList_ID='$id'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row["ItemList_ID"];
            $itemID=$my_row["Item_ID"];
            $itemName=$my_row["Item_Name"];
            $necessitiesID=$my_row["Necessities_ID"];
            $fname=$my_row["Fname"];
            $quantity=$my_row["ItemList_Quantity"];
            require("connection_close.php");
            return new Itemlist($id,$itemID,$itemName,$necessitiesID,$fname,$quantity);
        }
        public static function getAll(){
            $itemlistList=[];
            require("connection_connect.php");
            $sql="SELECT ItemList_ID,Item.Item_ID,Item_Name,Necessities.Necessities_ID,Fname,ItemList_Quantity FROM ItemList 
            LEFT JOIN Necessities ON ItemList.Necessities_ID=Necessities.Necessities_ID LEFT JOIN HomeIsolation 
            ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card LEFT JOIN Item ON Item.Item_ID=ItemList.Item_ID";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["ItemList_ID"];
                $itemID=$my_row["Item_ID"];
                $itemName=$my_row["Item_Name"];
                $necessitiesID=$my_row["Necessities_ID"];
                $fname=$my_row["Fname"];
                $quantity=$my_row["ItemList_Quantity"];
                $itemlistList[]=new Itemlist($id,$itemID,$itemName,$necessitiesID,$fname,$quantity);
            }
            require("connection_close.php");
            return $itemlistList;
        }
        public static function add($itemID,$necessitiesID,$quantity){
            require("connection_connect.php");
            $sql ="INSERT INTO ItemList (Item_ID,Necessities_ID,ItemList_Quantity)
            VALUES('$itemID',$necessitiesID,'$quantity')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM ItemList WHERE ItemList_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
        public static function search($key){
            $itemlistList=[];
            require("connection_connect.php");
            $sql="SELECT ItemList_ID,Item.Item_ID,Item_Name,Necessities.Necessities_ID,Fname,ItemList_Quantity FROM ItemList 
            LEFT JOIN Necessities ON ItemList.Necessities_ID=Necessities.Necessities_ID LEFT JOIN HomeIsolation 
            ON Necessities.HomeIsolation_ID=HomeIsolation.HomeIsolation_Id 
            LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card LEFT JOIN Item ON Item.Item_ID=ItemList.Item_ID 
            WHERE (ItemList_ID LIKE '%$key%' OR Item.Item_ID LIKE '%$key%' OR Necessities.Necessities_ID LIKE '%$key%' 
            OR Fname LIKE '%$key%' OR ItemList_Quantity LIKE '%$key%')";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["ItemList_ID"];
                $itemID=$my_row["Item_ID"];
                $itemName=$my_row["Item_Name"];
                $necessitiesID=$my_row["Necessities_ID"];
                $fname=$my_row["Fname"];
                $quantity=$my_row["ItemList_Quantity"];
                $itemlistList[]=new Itemlist($id,$itemID,$itemName,$necessitiesID,$fname,$quantity);
            }
            require("connection_close.php");
            return $itemlistList;
        }
        public static function update($itemID,$necessitiesID,$quantity){
            require("connection_connect.php");
            $sql="UPDATE ItemList SET ItemList_ID='$id',Item_ID='$itemID'
            ,Necessities_ID='$necessitiesID',ItemList_Quantity='$quantity' WHERE ItemList_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }
    }
?>