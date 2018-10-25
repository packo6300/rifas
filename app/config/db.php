<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Db{
    private $db;
    public function __construct(){
        try{
            $this->db= new PDO('mysql:host=localhost;dbname=sorteos;charset=utf8','packo','fallenito', array(
                PDO::ATTR_PERSISTENT => true)
            );
        }
        catch (PDOException $e){
            throw new Exception("Problema al conectarse a la base de datos<br>".$e->getMessage());
        }
    }    
    /**
     * 
     * @param type $sql
     * @param type $args
     * @return resultSet query array
     * @throws PDOException
     */
    public function Query($sql,$args=[]){
        try {
            $preparedStatement= $this->db->prepare($sql);
            $preparedStatement->execute($args);
            return $preparedStatement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exc) {
            throw new PDOException($exc);
        }
    }
    /**
     * 
     * @param type $sql
     * @param type $args
     * @return json string query 
     * @throws PDOException
     */
    public function QueryJson($sql,$args=[]){
        try {
            $preparedStatement= $this->db->prepare($sql);
            $preparedStatement->execute($args);
            return $this->jsonResponse($preparedStatement->fetchAll(PDO::FETCH_NUM));
        } catch (PDOException $exc) {
            throw new PDOException($exc);
        }
    }
    /**
     * 
     * @param type $sql
     * @param type $args
     * @return lastID 
     * @throws Exception
     */
    public function Insert($sql,$args=[]){
        try {
            $preparedStatement= $this->db->prepare($sql);
            $preparedStatement->execute($args);
            $id = $this->db->lastInsertId();
            return $id;
        } catch (PDOException $exc) {
            throw new Exception($exc);
        }
    }
    /**
     * funcion para actualizar registros regresa el numero de registros actualizados
     * @param type $sql query de consulta
     * @param type $args argumentos 
     * @return num rows afected
     * @throws Exception
     */
    public function Update($sql,$args=[]){
        try {
            $preparedStatement= $this->db->prepare($sql);
            $preparedStatement->execute($args);
            $id = $preparedStatement->rowCount();
            return $id;
        } catch (PDOException $exc) {
            throw new Exception($exc);
        }
    }
    /**
     * funcion para convertir un arreglo a Json
     * @param type $arr
     * @return array to Json format
     */
    public function jsonResponse($arr){
        try{
            return json_encode($arr);
        }
        catch (Exception $e){
            throw new Exception("Json parse\n".$e->getMessage());
        }
    }
}
