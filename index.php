<?php
$debug=TRUE;
if ($debug){
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
require 'vendor/autoload.php';
$smarty=new SmartyBC();
$smarty->setCompileDir(__DIR__.'/temp/');
//echo $_SERVER['REQUEST_URI'];
$s=array("sergio","jorge");
$menu=array(
    "Mi perfil",
    "Mis sorteos activos",
    "Otros sorteos",
);
$smarty->assign("footer","Copyright &copy; Your Website 2018");
$smarty->assign("title","Sorteos");
$smarty->assign("menu",$menu);
$smarty->assign("val",$s[rand(0,1)]);
$smarty->display(__DIR__.'/app/views/index.tpl');