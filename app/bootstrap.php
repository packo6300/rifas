<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try{
    spl_autoload_register(function ($name) {
        $class =__DIR__.'/controllers/'.$name.'.php';
        include $class;
    });
    spl_autoload_register(function ($name) {
        $class =__DIR__.'/models/'.$name.'.php';
        include $class;
    });
    $url= $_SERVER['REQUEST_URI'];
    $url= explode('/', $url);
    $controller=$url[1]."Controller";
    $action =filter_input(INPUT_GET,'action')."Action";
    if(empty($action)){$action="indexAction";}
    $controllerObj=new $controller();
}
catch (Exception $e){
     echo $e->getMessage();
}


