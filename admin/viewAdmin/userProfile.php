<?php ob_start() ?>
<article>
    <h2>User profile</h2>
    <div style="margin: 20px;">
    <a class="btn btn-primary" href="profileChange" role="button"><span class="glyphicon glyphicon-edit"></span> Change profile</a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered table-responsive">
<!--                <tr>
                    <th width="20%"></th>
                    <th width="80%"></th>
                </tr>-->

                <?php
                echo '<tr><td>Name:</td><td>'.$user['name'].'</td></tr>';
                echo '<tr><td>Login:</td><td>'.$user['login'].'</td></tr>';
                echo '<tr><td>Email:</td><td>'.$user['email'].'</td></tr>';
                echo '<tr><td>Job:</td><td>'.$user['job'].'</td></tr>';
                echo '<tr><td>Password:</td><td>****** <a href="passwordChange" role="button"><span class="glyphicon glyphicon-edit"></span> Change Password</a></td></tr>';?>

                <tr>
                    <td>Picture</td>
                    <td><div>
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($user['picture']).'" width=300 />';?>
                        </div></td>
                </tr>
            </table>
        </div>
    </div>
</article>

<?php $content = ob_get_clean(); 
include "viewAdmin/templates/layout.php";?>