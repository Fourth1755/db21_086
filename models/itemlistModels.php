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
    }
?>