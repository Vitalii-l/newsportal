<?php
class controllerAdminNews {
    //------- News List
    public static function NewsList() {
        $arr = modelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }
    //------- Add News
    public static function newsAddForm() {
        $arr = modelAdminCategory::getCategoryList();
        include_once 'viewAdmin/newsAddForm.php';
    }
    public static function newsAddResult() {
        $test = modelAdminNews::getNewsAdd();
        include_once 'viewAdmin/newsAddForm.php';
    }


}//class
?>
