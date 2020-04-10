<?php ob_start(); ?>

<div class="container" style="min-height: 400px;">
    <div class="col-md-11">
        <h2>Category Edit</h2>
        <?php
        if(isset($test)){
            if($test == true){
                ?>
            <div class="alert alert-info">
                <strong>Category changed </strong><a href="categoryAdmin"> Category List</a>
            </div>
            <?php
            }
            else if($test == false){
                ?>
                    <div class="alert alert-warning">
                        <strong>Error occured while category changing!</strong><a href="categoryAdmin"> Category List</a>
                    </div>
                    <?php             
            }
        }
        else{ ?>
        <form method="POST" action="categoryEditResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <td>Category name</td>
                    <td><input type="text" name="name" class="form-control" required value=<?php echo $detail['name']; ?>></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="save">
                            <span class="glyphicon glyphicon-plus"></span>Save changes
                        </button>
                        <a href="newsAdmin" class="btn btn-large btn-success">
                            <i class="glyphicon glyphicon-backward"></i> &nbsp;Back to list</a>
                    </td>
                </tr>                    
            </table>
        </form>
<?php   } ?>        
    </div>
</div>
<?php $content = ob_get_clean();
include "viewAdmin/templates/layout.php"; ?>