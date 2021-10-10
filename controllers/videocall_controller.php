<?php
    class VideocallController{
        public function index(){
            $videocall_list=Videocall::getAll();
            require_once("views/videocall/index_videocall.php");
        }
        public function newVideocall(){
            $homeisolation_list=HomeIsolation::getAll();
            require_once('views/videocall/newVideocall.php');
         }
         public function addVideocall(){
            $id=$_GET["id"];
            $date=$_GET["date"];
            $color=$_GET["color"];
            $symptom=$_GET["symptom"];
            $homeisolationID=$_GET["homeisolationID"];
            Videocall::add($date,$color,$symptom,$homeisolationID);
            VideocallController::index();
         }
    }
?>