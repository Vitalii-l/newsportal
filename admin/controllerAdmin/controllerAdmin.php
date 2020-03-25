<?php
class controllerAdmin {
    public static function formLoginSite() {
        include_once ('viewAdmin/formLogin.php');
    }
    
    // Admin authentification form
    public function loginAction() {
        $logIn=modelAdmin::userAuthentication();
        if(isset($logIn) and $logIn==ture){
            include_once('viewAdmin/startAdmin.php');
        }
        else {
            $_SESSION['errorString']='Wrong login username or password';
            include_once ('viewAdmin/formLogin.php');
       }
    }
    
    // Admin dashboard logout
    public static function logoutAction() {
        modelAdmin::userLogout();
        include_once ('viewAdmin/formLogin.php');
    }
    
    // Error page
    public static function error404() {
        include_once ('viewAdmin/error404.php');
    }
} // end class
?>