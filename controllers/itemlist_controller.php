<?php
    class ItemlistController{
        public function index(){
            $itemlist_list=Itemlist::getAll();
            require_once("views/itemlist/itemlist_index.php");
        }
        public function newItemlist(){
            $item_list=Item::getAll();
            $necessities_list=Necessities::getAll();
            require_once('views/itemlist/newItemlist.php');
         }
        public function addItemlist(){
            $id=$_GET["id"];
            $itemID=$_GET["itemID"];
            $necessitiesID=$_GET["necessitiesID"];
            $quantity=$_GET["quantity"];
            Itemlist::add($itemID,$necessitiesID,$quantity);
            ItemlistController::index();
        }
    }
?>