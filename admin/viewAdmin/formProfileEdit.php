<?php ob_start(); ?>

<div class="container" style="min-height: 400px;">
    <div class="col-md-11">
        <h2>Profile Edit</h2>
        <?php
        if(isset($test)){
            if($test == true){
                ?>
            <div class="alert alert-info">
                <strong>Prifile saved </strong><a href="userProfile"> Back</a>
            </div>
            <?php
            }
            else if($test == false){
                ?>
                <div class="alert alert-warning">
                    <strong>Error occured while profile changing! </strong><a href="userProfile"> Back</a>
                </div>
                <?php
            }
        }
        else{ ?>
        <form method="POST" action="profileChangeAnswer" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="username" class="form-control" required value=<?php echo $userdata['name']; ?>></td>
                </tr>
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="userlogin" class="form-control" required value=<?php echo $userdata['login']; ?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="useremail" class="form-control" required value=<?php echo $userdata['email']; ?>></td>
                </tr>
                <tr>
                    <td>Job</td>
                    <td><input type="text" name="userjob" class="form-control" value=<?php echo $userdata['job']; ?>></td>
                </tr>
                
                <!-- Image -->
                <tr>
                    <td>Old Picture</td>
                    <td><div>
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($userdata['picture']).'" width=150 />';?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Picture</td>
                    <td><div>
                            <input type="file" name="picture" style="color:black;">
                        </div></td>
                </tr>
                <!-- end image -->
                
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="save">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Save changes
                        </button>
                        <a href="userProfile" class="btn btn-large btn-success">
                            <i class="glyphicon glyphicon-floppy-remove"></i> &nbsp;Cancel changes</a>
                    </td>
                </tr>                    
            </table>
        </form>
<?php   } ?>        
    </div>
</div>
<?php $content = ob_get_clean();
include "viewAdmin/templates/layout.php"; ?>