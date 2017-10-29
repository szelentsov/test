<?php
    require 'config/db.php';
    require 'controllers/controller.php';
    require 'models/price.php';
    require 'views/view.php';
    
    $url = $_GET['url'];//принимаем название контроллера
    require_once 'controllers/'.$url.'.php'; //подключаем файл с контроллером
    $controller = new $url; 

