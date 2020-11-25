<?php

use App\Database;
use App\DbUser;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

$app = App::getInstance();
$db = $app->getDb();

//users

$users = new DbUser($db);
if(!$users->logged()){
    if(isset($_GET['p'])){
        if($_GET['p'] === 'signup'){
            $_GET['p'] = 'signup';
        } 
    }else{
        $_GET['p'] = 'login';
    }
           
}
//------
if(isset($_GET['logout'])){
    if($_GET['logout'] === 'deconnexion'){
        session_destroy();
        header('Location: index.php');
    }
}

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}


ob_start();

if($p === 'home'){
    require ROOT . "/page/home.php";
}elseif($p === 'themes'){
    require ROOT . "/page/single.php";
}elseif($p === 'login'){
    require ROOT . "/page/users/login.php";
}elseif($p === 'allTheme'){
    require ROOT . "/page/allTheme.php";
}elseif($p === 'signup'){
    require ROOT . "/page/users/signup.php";
}elseif($p === 'searchTheme'){
    require ROOT . "/page/searchTheme.php";
}

$content = ob_get_clean();

require ROOT . "/page/templates/default.php";