<?php
namespace App\Table;

use App\Database;

class TableTheme extends Table{
    protected $table = "themes";
    
    public static function getLast(){
        $db = new Database('mini-chat');
        $test = $db->query("SELECT * FROM themes  ORDER BY id DESC LIMIT 0,5", 'App\Table\TableTheme');

        return $test;
    }
    public static function getLastAll($debut){
        $debut = (int) $debut;
        $db = new Database('mini-chat');
        $test = $db->query("SELECT * FROM themes  ORDER BY id DESC LIMIT ".$debut.",15", 'App\Table\TableTheme');

        return $test;
    }
    public function getUrl(){
        return "index.php?p=themes&id=". $this->id  ."";
    }

    public static function searchTheme($theme){
        $db = new Database('mini-chat');
        $theme = htmlspecialchars($theme);
        $search = $db->prepare("SELECT * FROM themes WHERE titre = ?", array($theme), 'App\Table\TableTheme', true);
        return $search;
    }
}