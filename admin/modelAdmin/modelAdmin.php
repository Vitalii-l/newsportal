<?php
class modelAdmin {
    // admin authentification
    public static function userAuthentication() {
        if(isset($_SESSION['sessionId'])){
            $logIn=true;
        }
        else {
            $logIn=false;
            if(isset($_POST['btnLogin'])){
                if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!="" && $_POST['password']!=""){
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    //$password = filter_input(INPUT_POST, 'password');
                    $sql = 'SELECT * FROM `users` WHERE `email`="'.$email.'"';
                    $db = new database();
                    $item = $db->getOne($sql);
                    
                    if ($item!=null){
                        $loginEmail = strtolower($_POST['email']);
                        $password = $_POST['password'];
                        if ($loginEmail == $item['email'] && password_verify($password, $item['parol'])){
//                            echo 'Login success!!!';
                            $_SESSION['sessionId'] = session_id();
                            $_SESSION['userId'] = $item['id'];
                            $_SESSION['name'] = $item['login'];
                            $_SESSION['status'] = $item['status'];
                            $_SESSION['email'] = $item['email'];
                            $logIn = true;
                        }
                    }
                }
            }
        }
        return $logIn;
    }
    
    // Admin dashboard logout
    public static function userLogout() {
        unset($_SESSION['sessionId']);
        unset($_SESSION['userId']);
        unset($_SESSION['name']);
        unset($_SESSION['status']);
        unset($_SESSION['email']);
        session_destroy();
        return;
    }
    
    // User Profile
    public static function getUserData() {  
        $sql = 'SELECT * FROM `users` WHERE `email`="'.$_SESSION['email'].'"';
        $db = new database();
        $user = $db->getOne($sql);
        return $user;
    } 
    
    // User password change
    public static function userPasswordChange(){
        if (isset($_POST['save'])){
            $controll = array(0=>false,1=>'error');
            $errorString = "";
            $oldpassword = $_POST['oldPassword'];
            $password = $_POST['newPassword'];
            $confirm = $_POST['confirm'];
            
            // --- Checking: password length, password and confirmation matching
            if (!$oldpassword || !$password || mb_strlen($password) < 6){
                $errorString.= "Password must be at least 6 letters or more<br/>";}
            if ($password!==$confirm){
                $errorString.= "Passwords don't match<br/>";
            }
            
            $email = $_SESSION['email'];
            $sql = 'SELECT `parol` FROM `users` WHERE `email`="'.$email.'"';
            $db = new database();
            $item = $db->getOne($sql);
            
            // --- current password check
            if (!password_verify($oldpassword, $item['parol'])){
                $errorString.= "Incorrect Password!<br/>";
            }
            
            // --- Update user's password
            if (mb_strlen($errorString) == 0){
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `parol`='".$passwordHash."' WHERE `email`='".$email."'";
                $db = new database();
                $item = $db->executeRun($sql);
                
                echo $sql.'<br>';
                print_r($item);
                
                if ($item)
                    $controll = array(0=>true);
                else
                    $controll = array(0=>false,1=>'error');
            }
            else {
                $controll = array(0=>false,1=>$errorString);
            }
        }
        return $controll;
    }
    
    // Profile change
    public static function profileChange() {
        $test = false;
        if(isset($_POST['save'])){
            if(isset($_POST['username']) && isset($_POST['userlogin']) && isset($_POST['useremail'])){
                $name = $_POST['username'];
                $login = $_POST['userlogin'];
                $email = $_POST['useremail'];
                $job = $_POST['userjob'];
                
                // ------- image type blob
                $image = $_FILES['picture']['name'];
                if($image != ""){
                    $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
                }
                // --- In case of a picture isn't chosen 
                if ($image == ""){
                    $sql = "UPDATE `users` SET `name` = '$name', `login` = '$login', `email` = '$email' WHERE `users`.`email`='".$_SESSION['email']."'";
                }
                // --- Picture chosen
                else {
                    $sql = "UPDATE `users` SET `name` = '$name', `login` = '$login', `email` = '$email', `picture` = '$image' WHERE `users`.`email` ='".$_SESSION['email']."'";
                }
                
                $db = new database();
                $item = $db->executeRun($sql);
                
                if ($item == true){$test = true;$_SESSION['email'] = $email;}
            }
        }
        return $test;
    }
}
?>