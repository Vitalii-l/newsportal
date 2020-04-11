<?php
class controllerAdmin {
    public static function formLoginSite() {
        include_once ('viewAdmin/formLogin.php');
    }
    
    // Admin authentification form
    public static function loginAction() {
        $logIn= modelAdmin::userAuthentication();
        if(isset($logIn) and $logIn == 'ture'){
            include_once('viewAdmin/startAdmin.php');
        }
        else {
            $_SESSION['errorString']='Wrong login username or password';
            include_once ('viewAdmin/formLogin.php');
       }
    }
    
    // Admin panel logout
    public static function logoutAction() {
        modelAdmin::userLogout();
        include_once ('viewAdmin/formLogin.php');
    }
    
    // User Profile
    public static function userProfile() {
        $user = modelAdmin::getUserData();
        include_once 'viewAdmin/userProfile.php';
    }

    // Password change
    public static function formPasswordChange() {
        include_once ('viewAdmin/formPasswordChange.php');
    }
    public static function userPasswordChange() {
        $result = modelAdmin::userPasswordChange();
        include_once ('viewAdmin/answerPasswordChange.php');
    }
    
    // Error page
    public static function error404() {
        include_once ('viewAdmin/error404.php');
    }
} // end class
?>