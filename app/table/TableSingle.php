<?php
namespace App\Table;

use App\Database;

class TableSingle extends Table{
    protected $table = "Single";

    public static function getLastByTheme(){
        $db = \App::getInstance()->getDb();
        $test = $db->prepare("
        SELECT t.titre theme, m.users_pseudo pseudo, m.messages messages
        FROM themes t
        LEFT JOIN membres_messages m
        ON m.themes_id = t.id
        WHERE t.id = ? 
        LIMIT 0, 20",
        array($_GET['id']), 
        'App\Table\TableSingle'
        );

        return $test;
    }
    
}