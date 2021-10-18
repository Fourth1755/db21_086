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
        public function deleteConfirm(){
            $id=$_GET["itemlistID"];
            $itemlist=Itemlist::get($id);
            require_once('views/itemlist/deleteConfirm.php');
        }
        public function delete(){
            $id=$_GET["itemlistID"];
            Itemlist::delete($id);
            ItemlistController::index();
        }
        public function search(){
            $key=$_GET["key"];
            $itemlist_list=Item::search($key);
            require_once("views/itemlist/itemlist_index.php");
         }
    }
?>