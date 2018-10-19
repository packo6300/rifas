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
}
