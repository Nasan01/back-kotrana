<?php

use App\Table\TableTheme;

?>

<div class="row container-fluid">
    <?php foreach(TableTheme::getLastAll(0) as $lastAll):?>
    <a href="<?php echo $lastAll->getUrl(); ?>"><h2 style="color:dodgerblue;">
        <?php echo $lastAll->titre; ?>
    </h2></a>
    <em>Description:</em><br>
    <?php echo $lastAll->description; ?><br>
    <?php endforeach;?>
</div>
<div>
<a href="index.php?p=searchTheme">Search a theme</a>
</div>