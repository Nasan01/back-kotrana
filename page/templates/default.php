<?php 
// page de templates
/*if(isset($_POST)){
    session_destroy();
    header('Location: ../../page/users/login.php');
}*/

use App\DbUser;

$users = new DbUser($db);
if($users->logged()){
    $vartest = true;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/dist/css/bootstrap-theme.min.css" >
    <title>My App</title>
    <style>
        #footer{
            height: 50px;
            background-color:dimgrey;
            color:darkgray;
        }
        footer{
            border-radius: 16px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
               <div class="navbar-header">
                   <a class="navbar-brand" href="#">Mini-Chat</a>
                </div>
                <?php if(isset($vartest)): ?>
                <ul class="nav navbar-nav">
                    <li><a href="index.php?p=home">Home</a></li>
                    <li><a href="index.php?p=allTheme">All Theme</a></li>
                    <li><a href="#">Contacts-us</a></li>
                </ul> 
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?logout=deconnexion"><span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
                <?php endif;?>
            </div>
        </nav> 

        <div class="row container-fluid">
            <?php echo $content;?>
        </div>
        <footer class="container-fluid">
            <div class="row" id="footer">
                <div class="col-md-12 text-center">
                    <p>A Big Thanks For Me</p>
                    <p><i class="glyphicon glyphicon-lock"></i></p>
                </div>
            </div>
        </footer>
    </div>
    <script src="../public/dist/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery-3.5.0.min.js"></script>
</body>
</html>