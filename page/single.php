<?php

use App\DbUser;
use App\Table\TableSingle;
if(!TableSingle::find($_GET['id'])){
    App::notFound();
}

if(isset($_POST['btnSend'])){
    if(!empty($_POST)){
        $users = new DbUser(App::getInstance()->getDb());
        $users->postMessage();
    }
}

?>
<div class="row container-fluid">
    <?php foreach(TableSingle::getTheme() as $send):?>
    <h3><?php echo $send->titre; ?></h3>
    <b style="color:darkgray;"><?php echo $send->description; ?></b><br>
    <?php endforeach;?>
    <?php foreach (TableSingle::getLastByTheme() as $theme):?>
        <b><?php echo $theme->pseudo . ':'; ?></b><i><?php echo $theme->messages;?></i><br>
    <?php endforeach;?>
</div>
<div class="row container-fluid">
    <div class="col-sm-8">
        <form method="POST" class="form-horizontal">
            <label for="message">Your Ideas : </label>
            <textarea name="message" id="message" rows="3" class="form-control" required></textarea>
            <button class="btn btn-primary" name='btnSend'>Send</button>
        </form>
    </div>
</div>