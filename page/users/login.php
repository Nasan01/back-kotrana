<?php

use App\DbUser;

if(!empty($_POST)){
    $users = new DbUser(App::getInstance()->getDb());
    if($users->login($_POST['pseudo'], $_POST['password'])){
        header('Location: ../public/index.php');
        $test = true;
    }else{
        $erreur = true;
    }
}

?>
    <h1 style="color: deepskyblue;">Login</h1>
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
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                </div>
                </div>
                <div class="form-group">
                    <?php if(isset($erreur)): ?>
                        <div class="alert alert-danger">
                            Mauvais Indentifiant or pseudo
                        </div>
                    <?php endif; ?>        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                </div>
                <li><a href="index.php?p=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            </form>
        </div>
    </div>
    
