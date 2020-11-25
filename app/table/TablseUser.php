<?php
namespace App\Table;

use App;

class User{

    public function postMessage(){

        $db = App::getInstance()->getDb();
        var_dump($db);

    }

}