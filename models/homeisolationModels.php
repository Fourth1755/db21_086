<?php
    class HomeIsolation{
        public $id;
        public $initialsymptom;
        public $datereg;
        public $status;
        public $medicalvolunteerID;
        public $hospitalID;
        public $bookerID;
        public $ATKID;
        public function __construct($id,$initialsymptom,$datereg,$status,$medicalvolunteerID,$hospitalID,$bookerID,$ATKID){
            $this->id=$id;
            $this->initialsymptom=$initialsymptom;
            $this->datereg=$datereg;
            $this->status=$status;
            $this->medicalvolunteerID=$medicalvolunteerID;
            $this->hospitalID=$hospitalID;
            $this->bookerID=$bookerID;
            $this->ATKID=$ATKID;
        }
        public static function getAll(){
            $homeisolationList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM HomeIsolation";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["HomeIsolation_Id"];
                $initialsymptom=$my_row["HomeIsolation_InitialSymptom"];
                $datereg=$my_row["HomeIsolation_DateReg"];
                $status=$my_row["HomeIsolation_Status"];
                $medicalvolunteerID=$my_row["MedicalVolunteer_id"];
                $hospitalID=$my_row["Hospital_Id"];
                $bookerID=$my_row["ฺBooker_Id"];
                $ATKID=$my_row["ATK_Id"];
                $homeisolationList[]=new HomeIsolation($id,$initialsymptom,$datereg,$status,$medicalvolunteerID,$hospitalID,$bookerID,$ATKID);
            }
            require("connection_close.php");
            return $homeisolationList;
        }
    }
?>