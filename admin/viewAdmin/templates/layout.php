<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/all.css" rel="stylesheet"><!-- FontAwesome-->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-3.4.1.min.js"></script>
<!--        <script src="js/popper.min.js"></script>-->
        <script src="js/bootstrap.min.js" ></script>
    </head>
    <body>
        <div class="container">
            <?php
            if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"])){
            ?>
            
            <div class="header clearfix">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <?php
                        echo '<ul class="nav nav-pills pull-right"><li role="button">'.$_SESSION["name"].'<a href="logout" style="display:inline;">Выйти <i class="fa fa-sign-out"></i></a></li></ul>';
                        
                        if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin"){
                            echo '<h4><a href="../" target=_blank>WEB SITE </a>';
                            echo '  &#187 <a href="categoryAdmin">Categories </a>';
                            echo '  &#187 <a href="newsAdmin">NewsList </a>';
                            echo '</h4>';
                        } else{
                            echo "<h4>Access denied. You havn't access rights";
                        }
                        ?>
                        
                    </div>
                </nav>
            </div>
            <?php
            }
            ?>
            
            <div id="content">
                <?php echo $content; ?>
            </div>
            <footer class="footer">
                <p>&copy; 2020 Design Admin dashboard<i class="fa fa-child"></i></p>
            </footer>
    </body>
</html>



<?php

