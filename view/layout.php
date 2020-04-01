<!DOCTYPE html>

<html>
    <head>
        
        <title>Newsportal</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">-->
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
