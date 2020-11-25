<?php
namespace App;

class DbUser{

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function login($pseudo, $password){
        $user = $this->db->prepare("SELECT * FROM users WHERE pseudo = ?", array($pseudo), null, true);
        if($user){
            if($user->password === sha1($password)){
                $_SESSION['user'] = $user->id;
                $_SESSION['pseudo'] = $user->pseudo;
                return true;
            }
        }

        return false;
    }

    public function logged(){
        return isset($_SESSION['user']);
    }

    public function postMessage(){
        if(isset($_POST['message']) && isset($_GET['id']) && !empty($_POST['message'])) {
            $req = $this->db->insert("
            INSERT INTO membres_messages(users_pseudo, messages, themes_id, date_messages)
            VALUES(:pseudo, :messages, :theme, NOW())",
            array(
                "pseudo" => $_SESSION['pseudo'],
                "messages" => htmlspecialchars($_POST['message']),
                "theme" => htmlspecialchars($_GET['id']),
            ));
            

            return $req;
        }
        return false;
    }

    public function addUser($pseudo, $password){
        $user = $this->db->insert("
            INSERT INTO users(pseudo, password) 
            VALUES(:pseudo, :password)",
            array(
                "pseudo" => $pseudo,
                "password" => $password
            )
        );
    }

}