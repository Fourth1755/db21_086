<?php
    class NecessitiesController{
        public function index(){
            $necessities_list=Necessities::getAll();
            require_once("views/necessities/index_necessities.php");
        }
        public function newNecessities(){
            $homeisolation_list=HomeIsolation::getAll();
            require_once('views/necessities/newNecessities.php');
        }
        public function addNecessities(){
            $id=$_GET["id"];
            $date=$_GET["date"];
            $homeisolationID=$_GET["homeisolationID"];
            Necessities::add($date,$homeisolationID);
            NecessitiesController::index();
        }
    }
?>