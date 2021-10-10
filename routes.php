<?php
    $controllers =array('pages'=>['home', 'error'],'item'=>['index','newItem','addItem','deleteConfirm','delete','search','updateForm','updateItem']);
    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": $controller = new PagesController();
                        break;
            case "item" :require_once("models/itemModels.php");
                        $controller = new ItemController();
                        break;
            // case "order": require_once("models/orderModels.php");
            //             require_once("models/employeeModels.php");
            //             require_once("models/customerModels.php");
            //             $controller = new OrderController();
            //             break;
            
        }
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers)){
        if(in_array($action, $controllers[$controller])){
            call($controller, $action);
        }
        else{
            call('pages', 'error');
        }   
    } 
    else{
        call('pages', 'error');
    }
?>