<?php
namespace App\Table;

class Table{
    protected $table;

    public function __construct()
    {
        $part = explode('\\', get_class($this));
        $class_name = end($part);
        $this->table = strtolower(str_replace('Table', '', $class_name));
    }
    public static function getTheme(){
        $db = \App::getInstance()->getDb();
        $test = $db->prepare("
            SELECT id, titre, description 
            FROM themes
            WHERE id = ?
        ", array($_GET['id']),
        get_called_class()
        );
        return $test;
    }
    public static function find($id){
        $db = \App::getInstance()->getDb();
        return $test = $db->prepare("
            SELECT *
            FROM themes
            WHERE id = ?
            ", array($id),
            get_called_class(),
            true
        );
    }
}