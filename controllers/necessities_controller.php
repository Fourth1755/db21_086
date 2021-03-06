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
        public function deleteConfirm(){
            $homeisolation_list=HomeIsolation::getAll();
            $id=$_GET["necessitiesID"];
            $necessities=Necessities::get($id);
            require_once('views/necessities/deleteConfirm.php');
        }
        public function delete(){
            $id=$_GET["necessitiesID"];
            Necessities::delete($id);
            NecessitiesController::index();
        }
        public function search(){
            $key=$_GET["key"];
            $necessities_list=Necessities::search($key);
            require_once("views/necessities/index_necessities.php");
        }
        public function updateForm(){
            $id=$_GET["necessitiesID"];
            $homeisolation_list=HomeIsolation::getAll();
            $necessities=Necessities::get($id);
            require_once("views/necessities/updateForm.php");
        }
        public function updateNecessities(){
            $id=$_GET["id"];
            $date=$_GET["date"];
            $homeisolationID=$_GET["homeisolationID"];
            Necessities::update($id,$date,$homeisolationID);
            NecessitiesController::index();
        }
    }
?>