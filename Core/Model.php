<?php
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 29/06/2016
 * Time: 12:54 PM
 */

namespace Core;
use PDO;
use App\Config;

abstract class Model
{
    protected static function getDB(){
        static $db=null;
        if($db === null){

            try{
                $dsn='mysql:host='.Config::DB_HOST.';dbname='.Config::DB_NAME.';charset=utf8';
                $db=new PDO($dsn,Config::DB_USER,Config::DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
           
        }
        return $db;
    }
}