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
    }
?>