<?php
    class Item{
        public $id;
        public $name;
        public $detail;
        public function __construct($id,$name,$detail){
            $this->id=$id;
            $this->name=$name;
            $this->detail=$detail;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT * FROM Item WHERE Item_ID='$id'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row["Item_ID"];
            $name=$my_row["Item_Name"];
            $detail=$my_row["Item_Detail"];
            require("connection_close.php");
            return new Item($id,$name,$detail);
        }
        public static function getCount(){
            $count=0;
            require("connection_connect.php");
            $sql="SELECT COUNT(Item_ID) AS Count FROM Item";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $count=$my_row["Count"];
            require("connection_close.php");
            return $count;
        }
        public static function getAll(){
            $itemList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Item";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["Item_ID"];
                $name=$my_row["Item_Name"];
                $detail=$my_row["Item_Detail"];
                $itemList[]=new Item($id,$name,$detail);
            }
            require("connection_close.php");
            return $itemList;
        }
        public static function add($name,$detail){
            require("connection_connect.php");
            $sql ="INSERT INTO Item (Item_Name,Item_Detail)
            VALUES('$name','$detail')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function update($id,$name,$detail){
            require("connection_connect.php");
            $sql="UPDATE Item SET Item_ID=$id,Item_Name='$name',Item_Detail='$detail' WHERE Item_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM Item WHERE Item_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
        public static function search($key){
            $itemList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Item WHERE (Item_ID LIKE '%$key%' OR Item_Name LIKE '%$key%' OR Item_Detail LIKE '%$key%')";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["Item_ID"];
                $name=$my_row["Item_Name"];
                $detail=$my_row["Item_Detail"];
                $itemList[]=new Item($id,$name,$detail);
            }
            require("connection_close.php");
            return $itemList;
        }
    }
?>