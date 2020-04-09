<?php
class controllerAdminCategory {
    
    // Category List
    public static function categoryList() {
        $arr = modelAdminCategory::getCategoryList();
        include_once 'viewAdmin/categoryList.php';
    }
}