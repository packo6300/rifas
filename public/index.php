<?php
require '../vendor/autoload.php';
$smarty=new SmartyBC();
$smarty->setCompileDir(__DIR__.'/temp/');
echo $_SERVER['REQUEST_URI'];
$s=array("carlos","chuy","paco","sergio","jorge");
$smarty->assign("val",$s[rand(0,4)]);
$smarty->display(__DIR__.'/../app/views/index.tpl');