<?php
    class HomeIsolation{
        public $id;
        public $bookerID;
        public $ATKID;
        public $fname;
        public $lname;
        public $address;
        public function __construct($id,$bookerID,$ATKID,$fname,$lname,$address){
            $this->id=$id;
            $this->bookerID=$bookerID;
            $this->ATKID=$ATKID;
            $this->fname=$fname;
            $this->lname=$lname;
            $this->address=$address;
        }
        public static function getAll(){
            $homeisolationList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM HomeIsolation LEFT JOIN Booker ON HomeIsolation.Booker_Id=Booker.ID_Card";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["HomeIsolation_Id"];
                $bookerID=$my_row["ฺBooker_Id"];
                $ATKID=$my_row["ATK_Id"];
                $fname=$my_row["FName"];
                $lname=$my_row["LName"];
                $address=$my_row["Address"];
                $homeisolationList[]=new HomeIsolation($id,$bookerID,$ATKID,$fname,$lname,$address);
            }
            require("connection_close.php");
            return $homeisolationList;
        }
    }
?>