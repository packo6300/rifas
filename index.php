<?php
$debug=TRUE;
if ($debug){
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
require 'vendor/autoload.php';
$smarty=new SmartyBC();
$smarty->setCompileDir(__DIR__.'/temp/');
$menu=array(
    "Mi perfil",
    "Mis sorteos activos",
    "lista de sorteos",
);
$arr=array("title"=>"tarjeta electronica netflix");
$smarty->assign("footer","Copyright &copy; Your Website 2018");
$smarty->assign("ads1",'<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6064776652287686" data-ad-slot="2702525201" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({});</script>');
$smarty->assign("ads2",'<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6064776652287686" data-ad-slot="2850699014" data-ad-format="auto" data-full-width-responsive="true"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>');
$smarty->assign("ads3","aqui banner 3");
$smarty->assign("ads4","aqui banner 4");

$smarty->assign("title","Sorteos");
$smarty->assign("menu",$menu);
$smarty->display(__DIR__.'/app/views/index.tpl');