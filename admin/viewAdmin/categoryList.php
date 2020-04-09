<?php ob_start() ?>

<h2>Category List</h2>
<div class="container" style="min-height: 400px;">
    <div style="margin: 20px;">
    <a class="btn btn-primary" href="categoryAdd" role="button">Add category</a>
    </div>
    <div class="col-md-11">
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
                }
            ?>
        </table>
    </div>
</div>
<?php $content = ob_get_clean(); 
include "viewAdmin/templates/layout.php";?>

