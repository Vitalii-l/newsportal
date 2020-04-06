<!DOCTYPE html>

<html>
    <head>
        <title>Newsportal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">-->
        
        
    </head>
<body>
    <nav class="one">
        <ul class="topmenu">
            <li><a href="./">Stardileht</a></li>
            <li>
                <a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <?php
                        Controller::AllCategory();
                    ?>
                </ul>
            </li>
            <li><a href="testError">Info</a></li>
            <li><a href="admin">Login</a></li>
            <li><a href="registerForm">Register</a></li>
            
            <div class="pull-right">
                <li>
                    <form action="search">
                        <input type="text" name="otsi">
                        <input type="submit" name="Otsi">
                    </form>
                </li>
            </div>
            
        </ul>
    </nav>
    
    <section>
        <div class="divBox">
            <?php
            if(isset($content)){
                echo $content;
            }
            else {
                echo '<h1>Content is gone!</h1>';
            }
            ?>
        </div>
    </section>
    
    <hr>
    <p style="display:block; text-align:center;">JKTVR19 2020 a. &copy;</p>
</body>

</html>
