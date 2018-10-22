<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try{
    $debug=TRUE;
    if ($debug){
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    }
    require '../vendor/autoload.php';
    $smarty=new SmartyBC();
    $smarty->setCompileDir(__DIR__.'/temp/');
    spl_autoload_register(function ($name) {
       $class ='controllers/'.$name.'.php';
       include $class;
    });
    spl_autoload_register(function ($name2) {
        $class ='models/'.$name2.'.php';
        include $class;
    });
    $url= $_SERVER['REQUEST_URI'];
    $url= explode('/', $url);
    $controller=$url[1]."Controller";
    if($controller==="appController"){ $controller ="sorteoController";}
    $action =filter_input(INPUT_GET,'action')."Action";
    if(empty($action)){$action="indexAction";}
    $controllerObj=new $controller();
}
catch (Exception $e){
     echo $e->getMessage();
}


