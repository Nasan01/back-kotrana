<?php

use App\DbUser;

if(!empty($_POST)){
    $users = new DbUser(App::getInstance()->getDb());
    $mdp = sha1($_POST['password']);
    $mdp2 = sha1($_POST['password2']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    if($mdp == $mdp2){
        $users->addUser($pseudo, $mdp);
        if($users->login($_POST['pseudo'], $_POST['password'])){
            header('Location: ../public/index.php');
            $test = true;
        }else{
            die("not connected");
        }
    }else{
        $erreur = true;
    }
}

?>
<h1 style="color:deepskyblue;">Create a new compte</h1>

<div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Pseudo :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Enter pseudo" name="pseudo" required>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-2" for="password2">Confirm Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="password2" placeholder="Confirm password" name="password2" required>
                </div>
                </div>
                <?php if(isset($erreur)):?>
                    <div class="alert alert-danger">PassWord must be the same!</div>
                <?php endif;?>

                <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">S'inscrire</button>
                </div>
                </div>
                <li><a href="index.php?p=login"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
            </form>
        </div>
        
    </div>