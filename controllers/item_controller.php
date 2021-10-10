<?php
     class ItemController{
          public function index(){
            $item_list=Item::getAll();
            require_once('views/item/index_item.php');
        }
        // public function customer(){
        //     $customer_list=Customer::getAll();
        //     require_once('views/order/customer.php');
        // }
          public function newItem(){
             require_once('views/item/newItem.php');
          }
          public function addItem(){
             $id=$_GET["id"];
             $name=$_GET["name"];
             $detail=$_GET["detail"];
             Item::add($name,$detail);
             ItemController::index();
          }
          public function updateForm(){
             $id=$_GET["itemID"];
             $item=Item::get($id);
             require_once('views/item/updateForm.php');
          }
          public function updateItem(){
             $id=$_GET["itemID"];
             $name=$_GET["name"];
             $detail=$_GET["detail"];
        //     $customerID=$_GET["customerID"];
        //     $deposit=$_GET["deposit"];
        //     $managerID=$_GET["managerID"];
        //     $dateApprov=$_GET["dateApprov"];
        //     $extraProduct=$_GET["extraProduct"];
        //     $dateMenufacture=$_GET["dateMenufacture"];
        //     $transmissionStatus=$_GET["transmissionStatus"];
        //     Order::update($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
        //     OrderController::index();
               Item::update($id,$name,$detail);
               ItemController::index();
          }
          public function search(){
             $key=$_GET["key"];
             $item_list=Item::search($key);
             require_once('views/item/index_item.php');
          }
          public function deleteConfirm(){
             $id=$_GET['itemID'];
             $item=Item::get($id);
             require_once('views/item/deleteConfirm.php');
          }
          public function delete(){
             $id=$_GET['itemID'];
             $item=Item::delete($id);
             ItemController::index();
          }
    }
?>