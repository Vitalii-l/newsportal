<?php ob_start(); ?>

<div class="container" style="min-height: 400px;">
    <div class="col-md-11">
        <h2>Category Add</h2>
        <?php
        if(isset($test)){
            if($test == true){
        ?>
                <div class="alert alert-info">
                    <strong>Category added.</strong><a href="categoryAdmin"> Category List</a>
                </div>
        <?php
            }
        else if ($test == false) {
            ?>
            <div class="alert alert-warning">
                <strong>An error occurred while trying to add category</strong><a href="categoryAdmin"> Category List</a>
            </div>
        <?php
        }
        }
        else {            
        ?>
        <form method="POST" action="categoryAddResult" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <td>Category name</td>
                    <td><input type="text" name="name" class="form-control" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="save">
                            <span class="glyphicon glyphicon-plus"></span>Save
                        </button>
                        <a href="categoryAdmin" class="btn btn-large btn-success">
                            <i class="glyphicon glyphicon-backward"></i></a>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th width="10%">ID</th>
                    <th width="70%">Category name</th>
                    <th width="20%"></th>
                </tr>

                <?php
                foreach ($arr as $row) {
                    echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['name'].'<br>';
                    //echo '<b>Category: </b><i>'.$row['name'].'</i>';
                    echo '</td>';
                    echo '<td>'
        . '<a href="categoryEdit?id='.$row['id'].'">Edit <span class="glyphicon glyphicon-edit"></span></a>'
        . '<a href="categoryDel?id='.$row['id'].'"> Delete <span class="glyphicon glyphicon-remove"></span></a></td>';
                    echo '</tr>';
                    }?>
            </table>
        </form>
        <?php } ?>
        
    </div>
</div>
<?php $content = ob_get_clean();
include "viewAdmin/templates/layout.php";?>