<?php
/*
    El front end controller se encarga de configurar nuestra aplicacion
 *  */
    require 'config.php';
    require 'helpers.php';
    require_once 'library/Request.php';
    //llamar al controlador indicado
    //getController($_GET['url']);
    
    if(empty($_GET['url'])){
      $url = '';
    }else{
        $url = $_GET['url'];
    }
    
    $request = new Request($url);
    var_dump($request->getUrl());
    //var_dump($_GET);

