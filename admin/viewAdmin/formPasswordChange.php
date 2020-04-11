<!DOCTYPE html>
<html>
    <head>
        <title>Password change</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link href="./css/mystyle.css" rel="stylesheet" type="text/css" />
        <link href="./css/login.css" rel="stylesheet" type="text/css" />
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="panel-heading"><h3>Change your password</h3></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="passwordChangeAnswer">
                    <div class="form-group">
                        <label for="oldPassword" class="col-md-4 control-label">Current password</label>
                        <div class="col-md-6">
                            <input id="oldPassword" type="password" class="form-control" name="oldPassword" required>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="newPassword" class="col-md-4 control-label">New password</label>
                        <div class="col-md-6">
                            <input id="newPassword" type="password" class="form-control" name="newPassword" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="confirm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary" name="save">Save new password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


<?php $content = ob_get_clean();
include "viewAdmin/templates/layout.php"; ?>
