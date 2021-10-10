<?php
    class VideocallController{
        public function index(){
            $videocall_list=Videocall::getAll();
            require_once("views/videocall/index_videocall.php");
        }
    }
?>