<?php

use App\Table\TableTheme;

?>
<h1>Mini Chat</h1>
<h2 style="color:cadetblue;"><?php echo $_SESSION['pseudo'];?><br>Welcome to Mini-Chat</h2>
<div class="row">
    <div class="col-md-8">
        <h3>About My App</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        teur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.orem ipsum dolor sit
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        teur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-md-4">
        <h3>Pub</h3>
        <p>This is my first App with the Object Oriented Concepts and the bootstrap framework</p>
        <p><img src="../public/image/19.jpg" alt="test" class="img-thumbnail"></p>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <h3 style="color:brown;">Last Popular discussion</h3>
        <?php foreach (TableTheme::getLast() as $theme):?>

            <a href="<?php echo $theme->getUrl(); ?>">
                <h2 style="color:cornflowerblue;"><?php echo $theme->titre; ?></h2>
            </a>
            <em>(description)</em><br>
            <?php echo $theme->description;?>
            <br>
            <a href="<?php echo $theme->getUrl(); ?>">if you have an compte click here to share your ideas </a>

        <?php endforeach;?>
    </div>
</div>