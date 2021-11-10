<?php
    class TotalController{
        public function index(){
            $total_list=Total::getAll();
            require_once("views/total/index_total.php");
        }
        public function search(){
            $key=$_GET["key"];
            $total_list=Total::search($key);
            require_once("views/total/index_total.php");
        }
    }
?>