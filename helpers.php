<?php
    
    function getView($nameView, $vars = array()){
        extract($vars);
        require "views/$nameView.tpl.php";        
    }
    
    function getController($name){
        $name = empty($_GET['url'])? 'home':$_GET['url'];
        $name = strtolower($name);
        $fie = "controllers/$name.php";
        //exit($fie);
        if(file_exists($fie)){
            require $fie;
        }else{
            header("HTTP/1.0 404 Not Found");
            require "views/error404.tpl.php";
        }      
    }