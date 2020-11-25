<?php
namespace App;

class Config{

    private $setting = array();
    private static $_instance;

    public function __construct($file)
    {
        $this->setting = require($file);
    }

    public static function getInstance($file){
        if(self::$_instance === null){
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }
    public function get($key){
        if(!isset($key)){
            return null;
        }
        return $this->setting[$key];
    }
}