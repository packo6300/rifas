<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author packo
 */
use Illuminate\Database;
class DataBase extends Database\Connection {
    function __construct($pdo, $database = '', $tablePrefix = '', array $config = array()) {
        parent::__construct($pdo, $database, $tablePrefix, $config);
    } 
}
