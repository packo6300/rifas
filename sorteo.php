<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'app/config/db.php';
$db= new Db();
$arr=[];
$sorteoId= filter_input(INPUT_POST,'id');
if(!empty($sorteoId)){
    $arr=[":id"=>$sorteoId];
    $sql="select * from sorteos where id= :id ";
}
else{
    $sql="select * from sorteos;";
}
echo $db->QueryJson($sql,$arr);