<?php
    $controllers =array('pages'=>['home', 'error'],
    'item'=>['index','newItem','addItem','deleteConfirm','delete','search','updateForm','updateItem'],
    'videocall'=>['index','newVideocall','addVideocall','deleteConfirm','delete','search','updateForm','updateVideocall'],
    'necessities'=>['index','newNecessities','addNecessities','deleteConfirm','delete','search','updateForm','updateNecessities'],
    'itemlist'=>['index','newItemlist','addItemlist']
    );
    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": 
                        $controller = new PagesController();
                        break;
            case "item" :
                        require_once("models/itemModels.php");
                        $controller = new ItemController();
                        break;
            case "itemlist" :
                        require_once("models/itemModels.php");
                        require_once("models/necessitiesModels.php");
                        require_once("models/itemlistModels.php");
                        $controller = new ItemlistController();
                        break;
            case "videocall":
                        require_once("models/videocallModels.php");
                        require_once("models/homeisolationModels.php");
                        $controller =new VideocallController();
                        break;
            case "necessities":
                        require_once("models/homeisolationModels.php");
                        require_once("models/necessitiesModels.php");
                        $controller =new NecessitiesController();
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