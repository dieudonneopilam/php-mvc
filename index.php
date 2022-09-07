<?php

$params = explode('/',$_GET['p']);

define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

if ($params[0]!=null) {
    $controller = ucfirst($params[0]);
    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controllers/'.$controller.'.php');
    $controller = new $controller();

    $controller->$action();
   
}