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
        public function deleteConfirm(){
            $id=$_GET["videocallID"];
            $videocall=Videocall::get($id);
            require_once('views/videocall/deleteConfirm.php');
        }
        public function delete(){
            $id=$_GET["videocallID"];
            Videocall::delete($id);
            VideocallController::index();
        }
        public function search(){
            $key=$_GET["key"];
            $videocall_list=Videocall::search($key);
            require_once("views/videocall/index_videocall.php");
        }
        public function updateForm(){
            $id=$_GET["videocallID"];
            $color_list=['เขียว','เหลือง','แดง'];
            $homeisolation_list=HomeIsolation::getAll();
            $videocall=Videocall::get($id);
            require_once("views/videocall/updateForm.php");
        }
        public function updateVideocall(){
            $id=$_GET["id"];
            $date=$_GET["date"];
            $color=$_GET["color"];
            $symptom=$_GET["symptom"];
            $homeisolationID=$_GET["homeisolationID"];
            Videocall::update($id,$date,$color,$symptom,$homeisolationID);
            VideocallController::index();
        }
    }
?>