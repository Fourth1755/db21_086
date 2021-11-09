<?php
    class TotalController{
        public function index(){
            $necessities_list=Necessities::getAll();
            require_once("views/total/index_total.php");
        }
    }
?>