<?php
ob_start();

if(isset($result)){
    if($result[0] == true){
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Password changed.</strong><a href="admin/"> Dashboard</a>
            </div>
        </div>
        <?php
    }
    else if($result[0] == false){
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Error!</strong><br>
                <?php echo $result[1];?><br>
                <a href="userProfile"><span class="glyphicon glyphicon-chevron-left"></span>User profile</a>
            </div>
        </div>
        <?php
            
    }
}
?>
<?php $content = ob_get_clean(); ?>
<?php include 'viewAdmin/templates/layout.php';