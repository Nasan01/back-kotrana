<?php

use App\Table\TableTheme;

if(isset($_POST)){
    if(isset($_POST['search'])){
        $result = TableTheme::searchTheme($_POST['search']);
    }
}

?>
<div class="row container-fluid">
    <div class="col-md-7">
        <form class="navbar-form navbar-left col-md-6" method="POST" action="">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search Theme">
                <div class="input-group-btn">
                    <button class="btn btn-default" name="test" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <br>
        <?php if(isset($result) && $result): ?>
        
        <a href="<?php echo $result->getUrl(); ?>"><h2 style="color:dodgerblue;">
            <?php echo $result->titre; ?>
        </h2></a>
        <em>Description:</em><br>
        <?php echo $result->description; ?><br>
        
        <?php endif;?> 
    </div>
    
    <div class="col-md-5">
        <h3>Our Side Bar</h3>
        <ul>
            <li>test</li>
            <li>test</li>
            <li>test</li>
        </ul>
    </div>
</div>