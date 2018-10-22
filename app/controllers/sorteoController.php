<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sorteoController
 *
 * @author G039
 */
class sorteoController {
    public function __construct() {
        $model = new sorteoModel();
        echo $model->Saludar();
    }
    public function indexAction() {
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
    }
    
}
