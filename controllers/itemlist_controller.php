<?php
    class ItemlistController{
        public function index(){
            $itemlist_list=Itemlist::getAll();
            require_once("views/itemlist/itemlist_index.php");
        }
    }
?>