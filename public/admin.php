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
    $app->forbidden();
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
}

$content = ob_get_clean();

require ROOT . "/page/templates/default.php";