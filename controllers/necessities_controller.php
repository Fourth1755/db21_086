<?php
    class NecessitiesController{
        public function index(){
            $necessities_list=Necessities::getAll();
            require_once("views/necessities/index_necessities.php");
        }
        
    }
?>