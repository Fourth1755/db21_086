<?php
    class Itemlist{
        public $id;
        public $itemID;
        public $necessitiesID;
        public $quantity;
        public function __construct($id,$itemID,$necessitiesID,$quantity){
            $this->id=$id;
            $this->itemID=$itemID;
            $this->necessitiesID=$necessitiesID;
            $this->quantity=$quantity;
        }
        public static function getAll(){
            $itemlistList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM ItemList";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["ItemList_ID"];
                $itemID=$my_row["Item_ID"];
                $necessitiesID=$my_row["Necessities_ID"];
                $quantity=$my_row["ItemList_Quantity"];
                $itemlistList[]=new Itemlist($id,$itemID,$necessitiesID,$quantity);
            }
            require("connection_close.php");
            return $itemlistList;
        }
    }
?>