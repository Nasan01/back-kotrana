<?php
use App\Autoloader;
use App\Config;
use App\Database;

class App{
    private static $instance;

    public static function load(){
        session_start();
        require '../app/Autoloader.php';
        Autoloader::register();
        
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new App;
        }
        return self::$instance ;

    }

    public function getDb(){
        $config = Config::getInstance(ROOT.'/app/config/config.php');
        return new Database($config->get('dbname'));
    }

    public static function notFound(){
        return header('Location: ../404.php');
    }

    public static function getTable($name){
        $class_name = "\\App\\Table\\Table" . ucfirst($name);
        return new $class_name(self::$instance->getDb()); 
    }

    public  function forbidden(){
        header("HTTP/1.0 403 Forbidden");
        header('Location: ../page/users/login.php');
    }
    
}