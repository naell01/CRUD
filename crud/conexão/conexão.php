<?php
class Conexao{
    public static $instance;

    private function__construct(){
        //criar a funcionalidade da instância
    }

    public static function getconexao(){
        if(lisset(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dnname=crud', 'root', 'senac',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
    }
}